#PHP

#######Code that goes along with this can be found in the repository.

###Conditional Statements

PHP allows if, if/else, and if/elseif/else statements. It does not have other statements similar, however - e.g. Perl's "unless" conditional statement.

###Short-circuit evaluation

PHP does use short-circuit evaluation. An example can be found with the code for this page in the repository. In PHP, these four operators are short-circuit: &&, ||, and, or.  
Note that & and | are not short-circuit.

###Dangling Else

The dangling else issue in PHP is avoided through proper bracket use. Otherwise it is possible that the interpreter will read your code in a vastly different way than you intended.

###Loops

PHP allows while, do-while, for, and for-each loops. Examples of these can be found with the code for this page. 
In a while loop, a block of code will execute as long as an initially-specified condition is true. 
In a do-while loop, a block of code will be executed once - then a specified condition is checked, and the block of code will be executed again as long as the condition is true. 
A for-loop is used when you know in advance how many times you want to run a block of code.
A for-each loop - which is specifically for arrays - is used to run a block of code for every single thing/set of things in an array.

###Break/continue Statements

PHP allows break and continue statements to exit a loop.

###Switchcase Statements

Since "break" and "continue" function the same in PHP switchcase statements, you use either one to exit, but this means that you cannot use "continue" to have all statements evaluated.
