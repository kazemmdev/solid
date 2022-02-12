# Liskov Substitution Principle

> When extending a class, remember that you should be
able to pass objects of the subclass in place of objects of
the parent class without breaking the client code.

This means that the subclass should remain compatible with
the behavior of the superclass. When overriding a method,
extend the base behavior rather than replacing it with some-
thing else entirely.


- *Parameter types in a method of a subclass should match or be more 
abstract than parameter types in the method of the superclass.*

- *The return type in a method of a subclass should match or be
  a subtype of the return type in the method of the superclass.* 

- *A method in a subclass shouldn’t throw types of exceptions
which the base method isn’t expected to throw. In other words,
types of exceptions should match or be subtypes of the ones
that the base method is already able to throw.*

- *A subclass shouldn’t strengthen pre-conditions.*

- *A subclass shouldn’t weaken post-conditions.*

- *A subclass shouldn’t change values of private fields of the
  superclass. What? How’s that even possible? It turns out some
  programming languages let you access private members of
  a class via reflection mechanisms. Other languages (Python,
  JavaScript) don’t have any protection for the private members
  at all.*