what :
The Prototype design pattern is interesting 
in it's use of a cloning technique to replicate 
instantiate object.
New Objects are created by copying prototypical instances.
新的对象通过复制原型实例创建的。
In this context,instances refer to instantiated concrete class.
在这里，实例（instance）是指实例化的具体类。
why ：
The purpose is to reduce the cost of instantiating objects by using cloning.
Rather than instantiating new objects from a class,
a clone of a existing instance can be used instead.
原型设计模式的目的是通过使用克隆以减少实例化对象的开销。
与其从一个类实例化新的对象，完全可以使用一个已有实例的克隆。

Note that the Client class is an integral part of the Prototype design pattern.
The client creates an instance of a concrete prototype through the 
Prototype interface that includes a clone method of some sort.
注意Client类是原型设计模式中不可缺少的一部分。客户通过Prototype接口创建一个具体原型的实例，
prototype接口中包含一个克隆方法。

when: 
The Prototype pattern should be used in any application 
where your project requires that you create several instances of 
a prototype object.
