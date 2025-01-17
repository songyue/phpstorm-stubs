<?php

// Start of Core v.5.3.6-13ubuntu3.2

/**
 * Created by typecasting to object.
 * @link https://php.net/manual/zh/reserved.classes.php
 */
class stdClass {
}

/**
 * @link https://wiki.php.net/rfc/iterable
 */
interface iterable {}

/**
 * Interface to detect if a class is traversable using foreach.
 * Abstract base interface that cannot be implemented alone.
 * Instead it must be implemented by either {@see IteratorAggregate} or {@see Iterator}.
 *
 * @link https://php.net/manual/zh/class.traversable.php
 */
interface Traversable extends iterable {
}

/**
 * Interface to create an external Iterator.
 * @link https://php.net/manual/zh/class.iteratoraggregate.php
 */
interface IteratorAggregate extends Traversable {

    /**
     * Retrieve an external iterator
     * @link https://php.net/manual/zh/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @throws Exception on failure.
     * @since 5.0
     */
    public function getIterator();
}

/**
 * Interface for external iterators or objects that can be iterated
 * themselves internally.
 * @link https://php.net/manual/zh/class.iterator.php
 */
interface Iterator extends Traversable {

    /**
     * Return the current element
     * @link https://php.net/manual/zh/iterator.current.php
     * @return mixed Can return any type.
     * @since 5.0
     */
    public function current();

    /**
     * Move forward to next element
     * @link https://php.net/manual/zh/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0
     */
    public function next();

    /**
     * Return the key of the current element
     * @link https://php.net/manual/zh/iterator.key.php
     * @return string|float|int|bool|null scalar on success, or null on failure.
     * @since 5.0
     */
    public function key();

    /**
     * Checks if current position is valid
     * @link https://php.net/manual/zh/iterator.valid.php
     * @return bool The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0
     */
    public function valid();

    /**
     * Rewind the Iterator to the first element
     * @link https://php.net/manual/zh/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0
     */
    public function rewind();
}

/**
 * Interface to provide accessing objects as arrays.
 * @link https://php.net/manual/zh/class.arrayaccess.php
 */
interface ArrayAccess {

    /**
     * Whether a offset exists
     * @link https://php.net/manual/zh/arrayaccess.offsetexists.php
     * @param mixed $offset <p>
     * An offset to check for.
     * </p>
     * @return bool true on success or false on failure.
     * </p>
     * <p>
     * The return value will be casted to boolean if non-boolean was returned.
     * @since 5.0
     */
    public function offsetExists($offset);

    /**
     * Offset to retrieve
     * @link https://php.net/manual/zh/arrayaccess.offsetget.php
     * @param mixed $offset <p>
     * The offset to retrieve.
     * </p>
     * @return mixed Can return all value types.
     * @since 5.0
     */
    public function offsetGet($offset);

    /**
     * Offset to set
     * @link https://php.net/manual/zh/arrayaccess.offsetset.php
     * @param mixed $offset <p>
     * The offset to assign the value to.
     * </p>
     * @param mixed $value <p>
     * The value to set.
     * </p>
     * @return void
     * @since 5.0
     */
    public function offsetSet($offset, $value);

    /**
     * Offset to unset
     * @link https://php.net/manual/zh/arrayaccess.offsetunset.php
     * @param mixed $offset <p>
     * The offset to unset.
     * </p>
     * @return void
     * @since 5.0
     */
    public function offsetUnset($offset);
}

/**
 * Interface for customized serializing.
 * @link https://php.net/manual/zh/class.serializable.php
 */
interface Serializable {

    /**
     * String representation of object
     * @link https://php.net/manual/zh/serializable.serialize.php
     * @return string the string representation of the object or null
     * @since 5.1
     */
    public function serialize();

    /**
     * Constructs the object
     * @link https://php.net/manual/zh/serializable.unserialize.php
     * @param string $serialized <p>
     * The string representation of the object.
     * </p>
     * @return void
     * @since 5.1
     */
    public function unserialize($serialized);
}


/**
 * Throwable is the base interface for any object that can be thrown via a throw statement in PHP 7,
 * including Error and Exception.
 * @link https://php.net/manual/zh/class.throwable.php
 * @since 7.0
 */
interface Throwable
{

    /**
     * Gets the message
     * @link https://php.net/manual/zh/throwable.getmessage.php
     * @return string
     * @since 7.0
     */
    public function getMessage();

    /**
     * Gets the exception code
     * @link https://php.net/manual/zh/throwable.getcode.php
     * @return int <p>
     * Returns the exception code as integer in
     * {@see Exception} but possibly as other type in
     * {@see Exception} descendants (for example as
     * string in {@see PDOException}).
     * </p>
     * @since 7.0
     */
    public function getCode();

    /**
     * Gets the file in which the exception occurred
     * @link https://php.net/manual/zh/throwable.getfile.php
     * @return string Returns the name of the file from which the object was thrown.
     * @since 7.0
     */
    public function getFile();

    /**
     * Gets the line on which the object was instantiated
     * @link https://php.net/manual/zh/throwable.getline.php
     * @return int Returns the line number where the thrown object was instantiated.
     * @since 7.0
     */
    public function getLine();

    /**
     * Gets the stack trace
     * @link https://php.net/manual/zh/throwable.gettrace.php
     * @return array <p>
     * Returns the stack trace as an array in the same format as
     * {@see debug_backtrace()}.
     * </p>
     * @since 7.0
     */
    public function getTrace();

    /**
     * Gets the stack trace as a string
     * @link https://php.net/manual/zh/throwable.gettraceasstring.php
     * @return string Returns the stack trace as a string.
     * @since 7.0
     */
    public function getTraceAsString();

    /**
     * Returns the previous Throwable
     * @link https://php.net/manual/zh/throwable.getprevious.php
     * @return Throwable Returns the previous {@see Throwable} if available, or <b>NULL</b> otherwise.
     * @since 7.0
     */
    public function getPrevious();

    /**
     * Gets a string representation of the thrown object
     * @link https://php.net/manual/zh/throwable.tostring.php
     * @return string <p>Returns the string representation of the thrown object.</p>
     * @since 7.0
     */
    public function __toString();
}
/**
 * Exception is the base class for
 * all Exceptions.
 * @link https://php.net/manual/zh/class.exception.php
 */
class Exception implements Throwable {
    protected $message;
    protected $code;
    protected $file;
    protected $line;


    /**
     * Clone the exception
     * Tries to clone the Exception, which results in Fatal error.
     * @link https://php.net/manual/zh/exception.clone.php
     * @return void
     * @since 5.1
     */
    final private function __clone() { }

    /**
     * Construct the exception. Note: The message is NOT binary safe.
     * @link https://php.net/manual/zh/exception.construct.php
     * @param string $message [optional] The Exception message to throw.
     * @param int $code [optional] The Exception code.
     * @param Throwable $previous [optional] The previous throwable used for the exception chaining.
     * @since 5.1
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null) { }

    /**
     * Gets the Exception message
     * @link https://php.net/manual/zh/exception.getmessage.php
     * @return string the Exception message as a string.
     * @since 5.1
     */
    final public function getMessage() { }

    /**
     * Gets the Exception code
     * @link https://php.net/manual/zh/exception.getcode.php
     * @return mixed|int the exception code as integer in
     * <b>Exception</b> but possibly as other type in
     * <b>Exception</b> descendants (for example as
     * string in <b>PDOException</b>).
     * @since 5.1
     */
    final public function getCode() { }

    /**
     * Gets the file in which the exception occurred
     * @link https://php.net/manual/zh/exception.getfile.php
     * @return string the filename in which the exception was created.
     * @since 5.1
     */
    final public function getFile() { }

    /**
     * Gets the line in which the exception occurred
     * @link https://php.net/manual/zh/exception.getline.php
     * @return int the line number where the exception was created.
     * @since 5.1
     */
    final public function getLine() { }

    /**
     * Gets the stack trace
     * @link https://php.net/manual/zh/exception.gettrace.php
     * @return array the Exception stack trace as an array.
     * @since 5.1
     */
    final public function getTrace() { }

    /**
     * Returns previous Exception
     * @link https://php.net/manual/zh/exception.getprevious.php
     * @return Exception the previous <b>Exception</b> if available
     * or null otherwise.
     * @since 5.3
     */
    final public function getPrevious() { }

    /**
     * Gets the stack trace as a string
     * @link https://php.net/manual/zh/exception.gettraceasstring.php
     * @return string the Exception stack trace as a string.
     * @since 5.1
     */
    final public function getTraceAsString() { }

    /**
     * String representation of the exception
     * @link https://php.net/manual/zh/exception.tostring.php
     * @return string the string representation of the exception.
     * @since 5.1
     */
    public function __toString() { }

    public function __wakeup() { }
}

/**
 * Error is the base class for all internal PHP error exceptions.
 * @link https://php.net/manual/zh/class.error.php
 * @since 7.0
 */
class Error implements Throwable {

    /**
     * Construct the error object.
     * @link https://php.net/manual/zh/error.construct.php
     * @param string $message [optional] The Error message to throw.
     * @param int $code [optional] The Error code.
     * @param Throwable $previous [optional] The previous throwable used for the exception chaining.
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
    }

    /***
     * Gets the message
     * @link https://php.net/manual/zh/throwable.getmessage.php
     * @return string
     * @since 7.0
     */
    public final function getMessage()
    {
    }

    /**
     * Gets the exception code
     * @link https://php.net/manual/zh/throwable.getcode.php
     * @return int <p>
     * Returns the exception code as integer in
     * {@see Exception} but possibly as other type in
     * {@see Exception} descendants (for example as
     * string in {@see PDOException}).
     * </p>
     * @since 7.0
     */
    public final function getCode(){}


    /**
     * Gets the file in which the exception occurred
     * @link https://php.net/manual/zh/throwable.getfile.php
     * @return string Returns the name of the file from which the object was thrown.
     * @since 7.0
     */
    public final function getFile(){}


    /**
     * Gets the line on which the object was instantiated
     * @link https://php.net/manual/zh/throwable.getline.php
     * @return int Returns the line number where the thrown object was instantiated.
     * @since 7.0
     */
    public final function getLine(){}


    /**
     * Gets the stack trace
     * @link https://php.net/manual/zh/throwable.gettrace.php
     * @return array <p>
     * Returns the stack trace as an array in the same format as
     * {@see debug_backtrace()}.
     * </p>
     * @since 7.0
     */
    public final function getTrace(){}

    /**
     * Gets the stack trace as a string
     * @link https://php.net/manual/zh/throwable.gettraceasstring.php
     * @return string Returns the stack trace as a string.
     * @since 7.0
     */
    public final function getTraceAsString(){}

    /**
     * Returns the previous Throwable
     * @link https://php.net/manual/zh/throwable.getprevious.php
     * @return Throwable Returns the previous {@see Throwable} if available, or <b>NULL</b> otherwise.
     * @since 7.0
     */
    public final function getPrevious(){}
    /**
     * Gets a string representation of the thrown object
     * @link https://php.net/manual/zh/throwable.tostring.php
     * @return string <p>Returns the string representation of the thrown object.</p>
     * @since 7.0
     */
    public function __toString(){}

    /**
     * Clone the error
     * Error can not be clone, so this method results in fatal error.
     * @return void
     * @link https://php.net/manual/zh/error.clone.php
     */
    private final function __clone(){}

    public function __wakeup(){}
}

/**
 * There are three scenarios where a TypeError may be thrown.
 * The first is where the argument type being passed to a function does not match its corresponding declared
 * parameter type. The second is where a value being returned from a function does not match the declared function return type. The third is where an
 * invalid number of arguments are passed to a built-in PHP function (strict mode only).
 * @link https://php.net/manual/zh/class.typeerror.php
 * @since 7.0
 */
class TypeError extends Error {

}

/**
 * ParseError is thrown when an error occurs while parsing PHP code, such as when {@see eval()} is called.
 * @link https://php.net/manual/zh/class.parseerror.php
 * @since 7.0
 */
class ParseError extends CompileError {

}

/**
 * ArgumentCountError is thrown when too few arguments are passed to a user
 * defined routine.
 *
 * @since 7.1
 * @see https://php.net/migration71.incompatible#migration71.incompatible.too-few-arguments-exception
 */
class ArgumentCountError extends TypeError {}

/**
 * ArithmeticError is thrown when an error occurs while performing mathematical operations.
 * In PHP 7.0, these errors include attempting to perform a bitshift by a negative amount,
 * and any call to {@see intdiv()} that would result in a value outside the possible bounds of an integer.
 * @link https://php.net/manual/zh/class.arithmeticerror.php
 * @since 7.0
 */
class ArithmeticError extends Error {

}

/**
 * Class CompileError
 * @link https://secure.php.net/manual/zh/class.compileerror.php
 * @since 7.3
 */
class CompileError extends Error {

}

/**
 * DivisionByZeroError is thrown when an attempt is made to divide a number by zero.
 * @link https://php.net/manual/zh/class.divisionbyzeroerror.php
 * @since 7.0
 */
class DivisionByZeroError extends ArithmeticError {

}

/**
 * An Error Exception.
 * @link https://php.net/manual/zh/class.errorexception.php
 */
class ErrorException extends Exception {

    protected $severity;


    /**
     * Constructs the exception
     * @link https://php.net/manual/zh/errorexception.construct.php
     * @param string $message [optional] The Exception message to throw.
     * @param int $code [optional] The Exception code.
     * @param int $severity [optional] The severity level of the exception.
     * @param string $filename [optional] The filename where the exception is thrown.
     * @param int $lineno [optional] The line number where the exception is thrown.
     * @param Exception $previous [optional] The previous exception used for the exception chaining.
     * @since 5.1
     */
    public function __construct($message = "", $code = 0, $severity = 1, $filename = __FILE__, $lineno = __LINE__, $previous = null) { }

    /**
     * Gets the exception severity
     * @link https://php.net/manual/zh/errorexception.getseverity.php
     * @return int the severity level of the exception.
     * @since 5.1
     */
    final public function getSeverity() { }
}

/**
 * Class used to represent anonymous functions.
 * <p>Anonymous functions, implemented in PHP 5.3, yield objects of this type.
 * This fact used to be considered an implementation detail, but it can now be relied upon.
 * Starting with PHP 5.4, this class has methods that allow further control of the anonymous function after it has been created.
 * <p>Besides the methods listed here, this class also has an __invoke method.
 * This is for consistency with other classes that implement calling magic, as this method is not used for calling the function.
 * @link https://secure.php.net/manual/zh/class.closure.php
 */
final class Closure {

    /**
     * This method exists only to disallow instantiation of the Closure class.
     * Objects of this class are created in the fashion described on the anonymous functions page.
     * @link https://secure.php.net/manual/zh/closure.construct.php
     */
    private function __construct() { }

    /**
     * This is for consistency with other classes that implement calling magic,
     * as this method is not used for calling the function.
     * @param mixed $_ [optional]
     * @return mixed
     * @link https://secure.php.net/manual/zh/class.closure.php
     */
    public function __invoke(...$_) { }

    /**
     * Duplicates the closure with a new bound object and class scope
     * @link https://secure.php.net/manual/zh/closure.bindto.php
     * @param object $newthis The object to which the given anonymous function should be bound, or NULL for the closure to be unbound.
     * @param mixed $newscope The class scope to which associate the closure is to be associated, or 'static' to keep the current one.
     * If an object is given, the type of the object will be used instead.
     * This determines the visibility of protected and private methods of the bound object.
     * @return Closure Returns the newly created Closure object or FALSE on failure
     */
    function bindTo($newthis, $newscope = 'static') { }

    /**
     * This method is a static version of Closure::bindTo().
     * See the documentation of that method for more information.
     * @static
     * @link https://secure.php.net/manual/zh/closure.bind.php
     * @param Closure $closure The anonymous functions to bind.
     * @param object $newthis The object to which the given anonymous function should be bound, or NULL for the closure to be unbound.
     * @param mixed $newscope The class scope to which associate the closure is to be associated, or 'static' to keep the current one.
     * If an object is given, the type of the object will be used instead.
     * This determines the visibility of protected and private methods of the bound object.
     * @return Closure Returns the newly created Closure object or FALSE on failure
     */
    static function bind(Closure $closure, $newthis, $newscope = 'static') { }

    /**
     * Temporarily binds the closure to newthis, and calls it with any given parameters.
     * @link https://php.net/manual/zh/closure.call.php
     * @param object $newThis The object to bind the closure to for the duration of the call.
     * @param mixed $parameters [optional] Zero or more parameters, which will be given as parameters to the closure.
     * @return mixed
     * @since 7.0
     */
    function call ($newthis, ...$parameters) {}
    
    /**
     * @param callable $callable
     * @return Closure
     * @since 7.1
     */
    public static function fromCallable (callable $callable) {}
}

/**
 * Classes implementing <b>Countable</b> can be used with the
 * <b>count</b> function.
 * @link https://php.net/manual/zh/class.countable.php
 */
interface Countable {

    /**
     * Count elements of an object
     * @link https://php.net/manual/zh/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1
     */
    public function count();
}

/**
 * Weak references allow the programmer to retain a reference to an
 * object which does not prevent the object from being destroyed.
 * They are useful for implementing cache like structures.
 * @link https://www.php.net/manual/zh/class.weakreference.php
 */
class WeakReference {
    /**
     * This method exists only to disallow instantiation of the WeakReference
     * class. Weak references are to be instantiated with the factory method
     * <b>WeakReference::create()</b>.
     */
    public function __construct() {}

    /**
     * Create a new weak reference.
     * @link https://www.php.net/manual/zh/weakreference.create.php
     * @param object $referent The object to be weakly referenced.
     * @return WeakReference the freshly instantiated object.
     * @since 7.4.0
     */
    public static function create(object $referent): WeakReference {}

    /**
     * Gets a weakly referenced object. If the object has already been
     * destroyed, NULL is returned.
     * @link https://www.php.net/manual/zh/weakreference.get.php
     * @return object|null
     * @since 7.4.0
     */
    public function get(): ?object {}
}
