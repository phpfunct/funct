Contribution
============

If you want to contribute to this library by adding function(s). Basically you have two options.


Option A (Using funct-dev generator)
------------------------------------

It is the easiest way to add new function. It will generate a function file, function test file, function documentation and modifies CONTRIBUTORS.md file.

1. Fork a repository
2. Install dependencies

	```
	$ composer install
	```

3. Run generator

	```
	$ php bin/funct generate
	```

4. Follow on screen instructions, after generation you will have basic files generated.
5. Add your function to the loader file in `./src/loader.php`
6. Add your function code to function file in `./src/CodeBlocks`
7. Add your unit tests to function test file in `./src/Tests/CodeBlocks`
8. Add your function documentation to function doc file in `./docs`
9. Push you code and create a pull-request

Option B (Using bare-hands)
---------------------------

It is not the easiest solution. You will need to create everything by yourself

1. Fork a repository
2. Install dependencies

	```
	$ composer install
	```
3. Decide if your function name fits under function group like `string,collection,invoke` if not skip to 4. step
	1. If folder with group name in `UppercaseWords` format not exists under `src/CodeBlocks/` create it like `src/CodeBlocks/UppercaseWords`
4. Create a function file with file name in `UppercaseWords.php` format in group folder or root folder in `src/CodeBlocks`
5. Function file should have `namespace Funct\CodeBlocks;` **the group folder name does not add to namespace!**
6. Inside function file function name should match lower case underscore separated name like `function underscored_function_name()`
7. Write your function
8. Create a function test file in normal PSR-4 standard in `src/Tests/CodeBlocks/{groupName}/FunctionNameTest.php`
9. Namespace is PSR-4 standard `Funct\Tests\CodeBlock\{GroupName};`
10. It should extend `\PHPUnit_Framework_TestCase` class
12. Create a documentation file in `docs/{groupName}/function_name.md` use markdown for formation.
13. Commit & push your code
14. Create a pull request

Rules to follow
---------------

1. Function name should be descriptive, and follow `[a-z_]` formatting
2. If function fits under certain function category like: `string, collection` please prefix your function with category name and in category folder
3. Write as many test methods as you need. Tests should cover 100% function cases
4. If possible reuse existing function inside function to minimize code duplicate
5. Write a documentation with examples of all possible use cases
