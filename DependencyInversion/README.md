# Dependency Inversion Principle

> High-level classes shouldn’t depend on low-level classes.
Both should depend on abstractions. Abstractions
shouldn’t depend on details. Details should depend on
abstractions.

Usually when designing software, you can make a distinction
between two levels of classes:

- **Low-level classes** implement basic operations such as working
with a disk, transferring data over a network, connecting to a
database, etc.

- **High-level classes** contain complex business logic that directs
low-level classes to do something.

