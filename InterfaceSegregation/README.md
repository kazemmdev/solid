# Interface Segregation Principle

> Clients shouldn’t be forced to depend on methods they do not use.

Try to make your interfaces narrow enough that client classes
don’t have to implement behaviors they don’t need.
Hence, there’s no need to cram tons
of unrelated methods to a single interface. Break it down into
several more refined interfaces—you can implement them all
in a single class if needed. However, some classes may be fine
with implementing just one of them.