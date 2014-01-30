php-oop-fundamentals
====================

This repository accompanies the Tuts+ course PHP OOP Fundamentals

What Is OOP?
------------
In this lesson, we're going to have a look at what object oriented programming is, exactly. This may seem superfluous, but you will see that understanding just a LITTLE of the core concepts behind OOP, will really get you a long way. 

Classes vs objects
------------------
Now, as we talk about object oriented programming, we seem to continuously bump into classes. Why, if classes are so important, isn't this technique called 'Class Oriented Programming'? What exactly are classes and what are objects? 

Class Constants and Internal Reference
--------------------------------------
In this video we'll have a brief look at constants. And we'll also see how to reference properties, methods and constants from within a class itself.

Public vs Private Scope
-----------------------
I'm sure you've come acrross the keywords public and private. In this video, I'll help you understand what they mean, and what they're for.

Copying vs Cloning Objects
--------------------------
Sometimes it may be useful to create an object from a class and the copy it a couple of times. In that case, it's good to know how PHP deals with copying. By default, objects are copied by reference, not by value. That's all fine and dandy, but what does that mean, exactly? 

The Single Repsonsibility Principle
-----------------------------------
Let's see if we can decouple out code from the rest of our app. According to the single responsibility principle, every class should have one single responsibility, and that responsibility should be entirely encapsulated by the class. 

Magic Methods
-------------
You may think that all we have is the methods we see here. Well, that's not entirely true. Actually, every class is full of what is called magic methods, waiting to have their power unleashed. I'll run you through some of them.

Autoloading Through SPL
-----------------------
For very small projects, manually including files and classes is manageable. But once you start to work on bigger projects, things can get very messy very quickly. Spl_register_autoload to the rescue!

Working With Namespaces
-----------------------
In PHP, classes and functions must have a unique name to function without problems. If we included a third party library class which would be named User, just like our own user class, then we would be in trouble. Luckily, it's namespaces to the rescue.

Autoloading With PSR-0
----------------------
In a way, PSR is a set of standards about code structure and formatting. The very first standard, PSR-0 is an autoloading standard. In this video, I'll help you create automatic autoloading using PSR-0.

Class Inheritance And Protected Scope
-------------------------------------
In this video, I'll show you how to create child classes, that inherit properties and methods from a parent class.  

Overriding Parent Methods
-------------------------
Sometimes, a method in a parent class differs just a little of what you want it to do in a child class. That’s where Overriding comes into the picture.

Abstract Classes
----------------
An abstract class is a class that is meant to be a parent class only. You cannot create an object from an abstract class. So it's the kind of class you can use when you want to force developers to extend that class, rather than use it directly. Let's have a look to see how that works.

Interfaces
----------
An interface is basically a contract. It tells you exactly which methods should be present in each class that adheres to that contract. Interfaces are a great tool to help you decouple your classes from the rest if your application. And that's where the true power of object oriented programming really shines! 

Static Properties And Methods
-----------------------------
Using static properties and methods can help you write less verbose code. But bear in mind, statics do not behave like true objects.

Traits
------
PHP 5.4 introduced traits. A trait is a class containing in which you can group a set of behaviours that can be later 'plugged' in any class. How's that for reusable code? In this video, we'll create a small Curl trait and and setter/getter trait. And we'll include both of them in a single class. 

Dependency Injection
--------------------
In order to achieve the holy grail of decoupling, you cannot go without depenedncy injection. Depenedncy injection seems to be clouded in mystery. It doesn't have to be. in this video, I'll help you create two examples of dependency injection. 
