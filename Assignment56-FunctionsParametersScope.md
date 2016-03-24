#PHP

#######Code that goes along with this can be found in the repository.

###Function Declaration
Functions in PHP are declared starting by using the word "function".  
```{r}
function functionName() {
  executable code;
}
```
Function names can start with letters or underscores, but not numbers. An important thing to note is that function names are NOT case sensitive, meaning that function, FunCtion, and FUNCTION are all the same thing. 

###Function Placement
Functions don't have to be defined before they're referenced, and they are all part of global scope. Thus a function can be defined and called from anywhere in the code.

###Recursive Functions
It is possible in PHP to write/call recursive functions.

###Arguments
Functions can accept multiple arguments and they can be of different types.

###Returns
Functions can also return multiple values.

###Overwritten Variables?
If a variable is declared in the main body of code, and then a variable with the same name is declared in a loop, the first version of the variable gets overwritten.

###Overwritten Variables??
However, if a variable is declared in the main body of code, and then a variable with the same name is declared in a function, the first version of the variable DOES NOT get overwritten.
