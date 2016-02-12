#PHP

#######Code that goes along with this can be found in the repository.

###Naming

In PHP, all variable names look like this: 
'''{r}
$myVariable
'''
No matter if the variable in question is a string, int, array, boolean, etc., it always begins with a $ (dollar sign).
As far as naming conventions for variables go, PHP does not internally follow strict naming conventions; they are largely 
community standards, or a matter of personal preference.

###_-typed?
PHP is a dynamically-typed and weakly(loosely)-typed.

###Limitations?
In regards to ints, strings, floats, booleans, arrays, and hashtables/dictionaries, 
and things such as adding together ints and floats, or strings and ints, PHP has no restrictions.

###Type Conversions
Type conversions in PHP are widening and they work by default. So say you wanted to add together
an int and a float - PHP would automatically convert your result into a float, not an int, thus
you do not lose precision.
