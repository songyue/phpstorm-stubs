<?php
/**
 * mysql_xdevapi extension stubs
 * @link https://secure.php.net/manual/zh/book.mysql-xdevapi.php
 * @version 0.3 2019-08-21
 * @author Mathijs Giesbers
 * @package mysql_xdevapi
 */
namespace mysql_xdevapi;

define('MYSQLX_LOCK_DEFAULT', 0);
define('MYSQLX_TYPE_DECIMAL',0);
define('MYSQLX_TYPE_TINY',1);
define('MYSQLX_TYPE_SHORT',2);
define('MYSQLX_TYPE_SMALLINT',17);
define('MYSQLX_TYPE_MEDIUMINT',18);
define('MYSQLX_TYPE_INT',19);
define('MYSQLX_TYPE_BIGINT',20);
define('MYSQLX_TYPE_LONG',3);
define('MYSQLX_TYPE_FLOAT',4);
define('MYSQLX_TYPE_DOUBLE',5);
define('MYSQLX_TYPE_NULL',6);
define('MYSQLX_TYPE_TIMESTAMP',7);
define('MYSQLX_TYPE_LONGLONG',8);
define('MYSQLX_TYPE_INT24',9);
define('MYSQLX_TYPE_DATE',10);
define('MYSQLX_TYPE_TIME',11);
define('MYSQLX_TYPE_DATETIME',12);
define('MYSQLX_TYPE_YEAR',13);
define('MYSQLX_TYPE_NEWDATE',14);
define('MYSQLX_TYPE_ENUM',247);
define('MYSQLX_TYPE_SET',248);
define('MYSQLX_TYPE_TINY_BLOB',249);
define('MYSQLX_TYPE_MEDIUM_BLOB',250);
define('MYSQLX_TYPE_LONG_BLOB',251);
define('MYSQLX_TYPE_BLOB',252);
define('MYSQLX_TYPE_VAR_STRING',253);
define('MYSQLX_TYPE_STRING',254);
define('MYSQLX_TYPE_CHAR',1);
define('MYSQLX_TYPE_BYTES',21);
define('MYSQLX_TYPE_INTERVAL',247);
define('MYSQLX_TYPE_GEOMETRY',255);
define('MYSQLX_TYPE_JSON',245);
define('MYSQLX_TYPE_NEWDECIMAL',246);
define('MYSQLX_TYPE_BIT',16);
define('MYSQLX_LOCK_NOWAIT',1);
define('MYSQLX_LOCK_SKIP_LOCKED',2);


/**
 * @link https://secure.php.net/manual/zh/function.mysql-xdevapi-getsession.php
 * @param string $uri The URI to the MySQL server, such as mysqlx://user:password@host.
 * @return \mysql_xdevapi\Session
 */
function getSession($uri) {}

/**
 * @link https://www.php.net/manual/zh/function.mysql-xdevapi-expression.php
 * @param string $expression Bind prepared statement variables as parameters
 * @return object
 */
function expression($expression) {}


/**
 * Interface BaseResult
 * @package mysql_xdevapi
 */
interface BaseResult {

    /**
     * Fetch warnings from last operation
     * @link https://www.php.net/manual/zh/mysql-xdevapi-baseresult.getwarnings.php
     * @return array
     */
    public function getWarnings () : array;

    /**
     * Fetch warning count from last operation
     * @link https://www.php.net/manual/zh/mysql-xdevapi-baseresult.getwarningscount.php
     * @return int
     */
    public function getWarningsCount () : int;
}

/**
 * Class Collection
 * @link https://www.php.net/manual/zh/class.mysql-xdevapi-collection.php
 * @package mysql_xdevapi
 */
class Collection  {

    /**
     * Collection constructor
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collection.construct.php
     */
    public function __construct() {}

    /**
     * Add collection document
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collection.add.php
     * @param mixed $document
     * @return \mysql_xdevapi\CollectionAdd
     */
    public function add($document) : \mysql_xdevapi\CollectionAdd {}

    /**
     * Add or replace collection document
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collection.addorreplaceone.php
     * @param string $id
     * @param mixed $document
     * @return \mysql_xdevapi\Result
     */
    public function addOrReplaceOne($id,$document) : \mysql_xdevapi\Result {}

    /**
     * Get document count
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collection.count.php
     * @return integer The number of documents in the collection.
     */
    public function count() : int {}

    /**
     * Create collection index
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collection.createindex.php
     * @param string $index_name
     * @param string $index_desc_json
     */
    public function createIndex($index_name, $index_desc_json) {}

    /**
     * Drop collection index
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collection.dropindex.php
     * @param string $index_name
     * @return bool
     */
    public function dropIndex($index_name, $index_desc_json) : bool {}

    /**
     * Check if collection exists in database
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collection.existsindatabase.php
     * @return bool
     */
    public function existsInDatabase() : bool {}

    /**
     * @link https://secure.php.net/manual/zh/mysql-xdevapi-collection.find.php
     * @param string $search_condition
     * @return \mysql_xdevapi\CollectionFind
     */
    public function find($search_condition) : \mysql_xdevapi\CollectionFind {}

    /**
     * Get collection name
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collection.getname.php
     * @return string
     */
    public function getName() : string {}

    /**
     * Get one document
     * This is a shortcut for Collection.find("_id = :id").bind("id", id).execute().fetchOne();.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collection.getone.php
     * @param string $id
     * @return mixed Null if object is not found
     */
    public function getOne($id) {}

    /**
     * Retrieve the schema object that contains the collection.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collection.getschema.php
     * @return \mysql_xdevapi\Schema
     */
    public function getSchema() : \mysql_xdevapi\Schema {}

    /**
     * Get a new Session object from the Collection object.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collection.getsession.php
     * @return \mysql_xdevapi\Session
     */
    public function getSession() : \mysql_xdevapi\Session {}

    /**
     * Modify collections that meet specific search conditions. Multiple operations are allowed, and parameter binding is supported.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collection.modify.php
     * @param string $search_condition
     * @return \mysql_xdevapi\CollectionModify
     */
    public function modify($search_condition) : \mysql_xdevapi\CollectionModify {}

    /**
     * Remove collections that meet specific search conditions. Multiple operations are allowed, and parameter binding is supported.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collection.remove.php
     * @param string $search_condition
     * @return \mysql_xdevapi\CollectionRemove
     */
    public function remove($search_condition) : \mysql_xdevapi\CollectionRemove {}

    /**
     * Remove one collection document
     * Remove one document from the collection with the correspending ID. This is a shortcut for Collection.remove("_id = :id").bind("id", id).execute().
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collection.removeone.php
     * @param string $id
     * @return \mysql_xdevapi\Result
     */
    public function removeOne($id) : \mysql_xdevapi\Result {}

    /**
     * Updates (or replaces) the document identified by ID, if it exists.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collection.removeone.php
     * @param string $id
     * @param string $doc
     * @return \mysql_xdevapi\Result
     */
    public function replaceOne($id, $doc) : \mysql_xdevapi\Result {}
}


/**
 * Class CollectionAdd
 * @package mysql_xdevapi
 */
class CollectionAdd implements \mysql_xdevapi\Executable {

    /**
     * @return \mysql_xdevapi\Result
     */
    public function execute () : \mysql_xdevapi\Result {}
}


/**
 * Class CollectionFind
 * @link https://www.php.net/manual/zh/class.mysql-xdevapi-collectionfind.php
 * @package mysql_xdevapi
 */
class CollectionFind implements \mysql_xdevapi\Executable, \mysql_xdevapi\CrudOperationBindable, \mysql_xdevapi\CrudOperationLimitable, \mysql_xdevapi\CrudOperationSortable {

    /**
     * Bind value to query placeholder
     * It allows the user to bind a parameter to the placeholder in the search condition of the find operation. The placeholder has the form of :NAME where ':' is a common prefix that must always exists before any NAME, NAME is the actual name of the placeholder. The bind function accepts a list of placeholders if multiple entities have to be substituted in the search condition.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collectionfind.bind.php
     * @param array $placeholder_values
     * @return \mysql_xdevapi\CollectionFind
     */
    public function bind ( array $placeholder_values ) : \mysql_xdevapi\CollectionFind {}

    /**
     * Execute the find operation; this functionality allows for method chaining.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collectionfind.execute.php
     * @return \mysql_xdevapi\DocResult
     */
    public function execute () : \mysql_xdevapi\DocResult {}

    /**
     * Defined the columns for the query to return. If not defined then all columns are used.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collectionfind.fields.php
     * @param string $projection
     * @return \mysql_xdevapi\CollectionFind
     */
    public function fields ( string $projection ) : \mysql_xdevapi\CollectionFind {}

    /**
     * This function can be used to group the result-set by one more columns, frequently this is used with aggregate functions like COUNT,MAX,MIN,SUM etc.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collectionfind.groupby.php
     * @param string $sort_expr
     * @return \mysql_xdevapi\CollectionFind
     */
    public function groupBy ( string $sort_expr ) : \mysql_xdevapi\CollectionFind {}

    /**
     * This function can be used after the 'field' operation in order to make a selection on the documents to extract.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collectionfind.having.php
     * @param string $sort_expr
     * @return \mysql_xdevapi\CollectionFind
     */
    public function having ( string $sort_expr ) : \mysql_xdevapi\CollectionFind {}

    /**
     * Set the maximum number of documents to return.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collectionfind.limit.php
     * @param int $rows
     * @return \mysql_xdevapi\CollectionFind
     */
    public function limit ( int $rows ) : \mysql_xdevapi\CollectionFind {}

    /**
     * Execute operation with EXCLUSIVE LOCK
     *
     * Lock exclusively the document, other transactions are blocked from updating the document until the document is locked While the document is locked, other transactions are blocked from updating those docs, from doing SELECT ... LOCK IN SHARE MODE, or from reading the data in certain transaction isolation levels. Consistent reads ignore any locks set on the records that exist in the read view.
     * This feature is directly useful with the modify() command, to avoid concurrency problems. Basically, it serializes access to a row through row locking
     *
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collectionfind.lockexclusive.php
     *
     * @param int $lock_waiting_option
     * @return \mysql_xdevapi\CollectionFind
     */
    public function lockExclusive (int $lock_waiting_option) : \mysql_xdevapi\CollectionFind {}

    /**
     * Execute operation with SHARED LOCK
     *
     * Allows to share the documents between multiple transactions which are locking in shared mode.
     * Other sessions can read the rows, but cannot modify them until your transaction commits.
     * If any of these rows were changed by another transaction that has not yet committed,
     * your query waits until that transaction ends and then uses the latest values.
     *
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collectionfind.lockshared.php
     *
     * @param int $lock_waiting_option
     * @return \mysql_xdevapi\CollectionFind
     */
    public function lockShared ( int $lock_waiting_option ) : \mysql_xdevapi\CollectionFind {}

    /**
     * Skip given number of elements to be returned
     *
     * Skip (offset) these number of elements that otherwise would be returned by the find operation. Use with the limit() method.
     * Defining an offset larger than the result set size results in an empty set.
     *
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collectionfind.offset.php
     *
     * @param int $position
     * @return \mysql_xdevapi\CollectionFind
     */
    public function offset ( int $position ) : \mysql_xdevapi\CollectionFind {}

    /**
     * Set the sorting criteria
     *
     * Sort the result set by the field selected in the sort_expr argument. The allowed orders are ASC (Ascending) or DESC (Descending). This operation is equivalent to the 'ORDER BY' SQL operation and it follows the same set of rules.
     *
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collectionfind.sort.php
     *
     * @param string $sort_expr
     * @return CollectionFind
     */
    public function sort ( string $sort_expr ) : \mysql_xdevapi\CollectionFind {}
}


/**
 * Class CollectionModify
 * @package mysql_xdevapi
 */
class  CollectionModify implements \mysql_xdevapi\Executable, \mysql_xdevapi\CrudOperationBindable, \mysql_xdevapi\CrudOperationLimitable, \mysql_xdevapi\CrudOperationSkippable, \mysql_xdevapi\CrudOperationSortable {
    /**
     * Add an element to a document's field, as multiple elements of a field are represented as an array. Unlike arrayInsert(), arrayAppend() always appends the new element at the end of the array, whereas arrayInsert() can define the location.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collectionmodify.arrayappend.php
     * @param string $collection_field
     * @param string $expression_or_literal
     * @return \mysql_xdevapi\CollectionModify
     */
    public function arrayAppend ( string $collection_field , string $expression_or_literal ) : \mysql_xdevapi\CollectionModify {}

    /**
     * Add an element to a document's field, as multiple elements of a field are represented as an array. Unlike arrayAppend(), arrayInsert() allows you to specify where the new element is inserted by defining which item it is after, whereas arrayAppend() always appends the new element at the end of the array.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collectionmodify.arrayinsert.php
     * @param string $collection_field
     * @param string $expression_or_literal
     * @return \mysql_xdevapi\CollectionModify
     */
    public function arrayInsert ( string $collection_field , string $expression_or_literal ) : \mysql_xdevapi\CollectionModify {}

    /**
     * Bind a parameter to the placeholder in the search condition of the modify operation.
     * The placeholder has the form of :NAME where ':' is a common prefix that must always exists before any NAME where NAME is the name of the placeholder. The bind method accepts a list of placeholders if multiple entities have to be substituted in the search condition of the modify operation.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collectionmodify.bind.php
     * @param array $placeholder_values
     * @return \mysql_xdevapi\CollectionModify
     */
    public function bind ( array $placeholder_values ) : \mysql_xdevapi\CollectionModify {}

    /**
     * The execute method is required to send the CRUD operation request to the MySQL server.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collectionmodify.execute.php
     * @return \mysql_xdevapi\Result
     */
    public function execute () : \mysql_xdevapi\Result {}

    /**
     * Limit the number of documents modified by this operation. Optionally combine with skip() to define an offset value.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collectionmodify.limit.php
     * @param int $rows
     * @return \mysql_xdevapi\CollectionModify
     */
    public function limit ( int $rows ) : \mysql_xdevapi\CollectionModify {}

    /**
     * Takes a patch object and applies it on one or more documents, and can update multiple document properties.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collectionmodify.patch.php
     * @param string $document
     * @return \mysql_xdevapi\CollectionModify
     */
    public function patch ( string $document ) : \mysql_xdevapi\CollectionModify {}

    /**
     * Replace (update) a given field value with a new one.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collectionmodify.replace.php
     * @param string $collection_field
     * @param string $expression_or_literal
     * @return \mysql_xdevapi\CollectionModify
     */
    public function replace ( string $collection_field , string $expression_or_literal ) : \mysql_xdevapi\CollectionModify {}

    /**
     * Sets or updates attributes on documents in a collection.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collectionmodify.set.php
     * @param string $collection_field
     * @param string $expression_or_literal
     * @return \mysql_xdevapi\CollectionModify
     */
    public function set ( string $collection_field , string $expression_or_literal ) : \mysql_xdevapi\CollectionModify {}

    /**
     * Skip the first N elements that would otherwise be returned by a find operation. If the number of elements skipped is larger than the size of the result set, then the find operation returns an empty set.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collectionmodify.skip.php
     * @param int $position
     * @return \mysql_xdevapi\CollectionModify
     */
    public function skip ( int $position ) : \mysql_xdevapi\CollectionModify {}

    /**
     * Sort the result set by the field selected in the sort_expr argument. The allowed orders are ASC (Ascending) or DESC (Descending). This operation is equivalent to the 'ORDER BY' SQL operation and it follows the same set of rules.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collectionmodify.sort.php
     * @param string $sort_expr
     * @return \mysql_xdevapi\CollectionModify
     */
    public function sort ( string $sort_expr ) : \mysql_xdevapi\CollectionModify {}

    /**
     * Removes attributes from documents in a collection.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collectionmodify.unset.php
     * @param array $fields
     * @return \mysql_xdevapi\CollectionModify
     */
    public function unset ( array $fields ) : \mysql_xdevapi\CollectionModify {}
}




class CollectionRemove implements \mysql_xdevapi\Executable, \mysql_xdevapi\CrudOperationBindable, \mysql_xdevapi\CrudOperationLimitable, \mysql_xdevapi\CrudOperationSortable {

    /**
     * Bind a parameter to the placeholder in the search condition of the remove operation.
     * The placeholder has the form of :NAME where ':' is a common prefix that must always exists before any NAME where NAME is the name of the placeholder. The bind method accepts a list of placeholders if multiple entities have to be substituted in the search condition of the remove operation.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collectionremove.bind.php
     * @param array $placeholder_values
     * @return \mysql_xdevapi\CollectionRemove
     */
    public function bind ( array $placeholder_values ) : \mysql_xdevapi\CollectionRemove {}

    /**
     * The execute function needs to be invoked in order to trigger the client to send the CRUD operation request to the server.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collectionremove.execute.php
     * @return \mysql_xdevapi\Result
     */
    public function execute () : \mysql_xdevapi\Result {}

    /**
     * Sets the maximum number of documents to remove.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collectionremove.limit.php
     * @param int $rows
     * @return \mysql_xdevapi\CollectionRemove
     */
    public function limit ( int $rows ) : \mysql_xdevapi\CollectionRemove {}

    /**
     * Sort the result set by the field selected in the sort_expr argument. The allowed orders are ASC (Ascending) or DESC (Descending). This operation is equivalent to the 'ORDER BY' SQL operation and it follows the same set of rules.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-collectionremove.sort.php
     * @param string $sort_expr
     * @return \mysql_xdevapi\CollectionRemove
     */
    public function sort ( string $sort_expr ) : \mysql_xdevapi\CollectionRemove {}
}


/**
 * Class ColumnResult
 * @package mysql_xdevapi
 */
class ColumnResult {
    /**
     * Get character set
     * @link https://www.php.net/manual/zh/mysql-xdevapi-columnresult.getcharactersetname.php
     * @return string
     */
    public function getCharacterSetName () : string {}

    /**
     * Get collation name
     * @link https://www.php.net/manual/zh/mysql-xdevapi-columnresult.getcollationname.php
     * @return string
     */
    public function getCollationName () : string {}

    /**
     * Get column label
     * @link https://www.php.net/manual/zh/mysql-xdevapi-columnresult.getcolumnlabel.php
     * @return string
     */
    public function getColumnLabel () : string {}

    /**
     * Get column name
     * @link https://www.php.net/manual/zh/mysql-xdevapi-columnresult.getcolumnname.php
     * @return string
     */
    public function getColumnName () : string {}

    /**
     * Get fractional digit length
     * @link https://www.php.net/manual/zh/mysql-xdevapi-columnresult.getfractionaldigits.php
     * @return int
     */
    public function getFractionalDigits () : int {}

    /**
     * Get column field length
     * @link https://www.php.net/manual/zh/mysql-xdevapi-columnresult.getlength.php
     * @return int
     */
    public function getLength () : int {}

    /**
     * Get schema name
     * @link https://www.php.net/manual/zh/mysql-xdevapi-columnresult.getschemaname.php
     * @return string
     */
    public function getSchemaName () : string {}

    /**
     * Get table label
     * @link https://www.php.net/manual/zh/mysql-xdevapi-columnresult.gettablelabel.php
     * @return string
     */
    public function getTableLabel () : string {}

    /**
     * Get table name
     * @link https://www.php.net/manual/zh/mysql-xdevapi-columnresult.gettablename.php
     * @return string
     */
    public function getTableName () : string {}

    /**
     * Get column type
     * @link https://www.php.net/manual/zh/mysql-xdevapi-columnresult.gettype.php
     * @return int
     */
    public function getType () : int {}

    /**
     * Check if signed type
     * @link https://www.php.net/manual/zh/mysql-xdevapi-columnresult.isnumbersigned.php
     * @return int
     */
    public function isNumberSigned () : int {}

    /**
     * Check if padded
     * @link https://www.php.net/manual/zh/mysql-xdevapi-columnresult.ispadded.php
     * @return int
     */
    public function isPadded () : int {}
}


/**
 * Interface CrudOperationBindable
 * @link https://www.php.net/manual/zh/class.mysql-xdevapi-crudoperationbindable.php
 * @package mysql_xdevapi
 */
interface CrudOperationBindable {
    /**
     * Binds a value to a specific placeholder.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-crudoperationbindable.bind.php
     * @param array $placeholder_values
     * @return CrudOperationBindable
     */
    public function bind ( array $placeholder_values ) : \mysql_xdevapi\CrudOperationBindable;
}


/**
 * Interface CrudOperationLimitable
 * @link https://www.php.net/manual/zh/class.mysql-xdevapi-crudoperationlimitable.php
 * @package mysql_xdevapi
 */
interface CrudOperationLimitable {
    /**
     * Set result limit
     * @link https://www.php.net/manual/zh/mysql-xdevapi-crudoperationlimitable.limit.php
     * @param int $rows
     * @return CrudOperationLimitable
     */
    public function limit ( int $rows ) : \mysql_xdevapi\CrudOperationLimitable;
}


/**
 * Interface CrudOperationSkippable
 * @link https://www.php.net/manual/zh/class.mysql-xdevapi-crudoperationskippable.php
 * @package mysql_xdevapi
 */
interface CrudOperationSkippable {
    /**
     * Number of operations to skip
     * @link https://www.php.net/manual/zh/mysql-xdevapi-crudoperationskippable.skip.php
     * @param int $skip
     * @return CrudOperationSkippable
     */
    public function skip ( int $skip ) : \mysql_xdevapi\CrudOperationSkippable;
}



/**
 * Interface CrudOperationSortable
 * @link https://www.php.net/manual/zh/class.mysql-xdevapi-crudoperationsortable.php
 * @package mysql_xdevapi
 */
interface CrudOperationSortable {
    /**
     * Sort results
     * @link https://www.php.net/manual/zh/mysql-xdevapi-crudoperationsortable.sort.php
     * @param string $sort_expr
     * @return CrudOperationSortable
     */
    public function sort ( string $sort_expr ) : \mysql_xdevapi\CrudOperationSortable;
}


/**
 * Interface DatabaseObject
 * @link https://www.php.net/manual/zh/class.mysql-xdevapi-databaseobject.php
 * @package mysql_xdevapi
 */
interface DatabaseObject {
    /**
     * Check if object exists in database
     * @link https://www.php.net/manual/zh/mysql-xdevapi-databaseobject.existsindatabase.php
     * @return bool
     */
    public function existsInDatabase () : bool;

    /**
     * Get object name
     * @link https://www.php.net/manual/zh/mysql-xdevapi-databaseobject.getname.php
     * @return string
     */
    public function getName () : string;

    /**
     * Get session name
     * @link https://www.php.net/manual/zh/mysql-xdevapi-databaseobject.getsession.php
     * @return  \mysql_xdevapi\Session
     */
    public function getSession () : \mysql_xdevapi\Session;
}


/**
 * Class DocResult
 * @link https://www.php.net/manual/zh/class.mysql-xdevapi-docresult.php
 * @package mysql_xdevapi
 */
class DocResult implements \mysql_xdevapi\BaseResult, \Traversable {
    /**
     * Get all rows
     * @link https://www.php.net/manual/zh/mysql-xdevapi-docresult.fetchall.php
     * @return array
     */
    public function fetchAll () : array {}

    /**
     * Fetch one result from a result set.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-docresult.fetchone.php
     * @return array
     */
    public function fetchOne () : array {}

    /**
     * Fetches warnings generated by MySQL server's last operation.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-docresult.getwarnings.php
     * @return array|\mysql_xdevapi\Warning
     */
    public function getWarnings () : array {}

    /**
     * Returns the number of warnings raised by the last operation. Specifically, these warnings are raised by the MySQL server.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-docresult.getwarningscount.php
     * @return int
     */
    public function getWarningsCount () : int {}
}

/**
 * Class Exception
 * @package mysql_xdevapi
 */
class Exception extends \RuntimeException implements \Throwable {}


/**
 * Interface Executable
 * @link https://www.php.net/manual/zh/class.mysql-xdevapi-exception.php
 * @package mysql_xdevapi
 */
interface Executable {
    /**
     * Execute statement
     * @link https://www.php.net/manual/zh/class.mysql-xdevapi-executable.php
     * @return Result
     */
    public function execute () : \mysql_xdevapi\Result;
}


/**
 * Class ExecutionStatus
 * @link https://www.php.net/manual/zh/class.mysql-xdevapi-executionstatus.php
 * @package mysql_xdevapi
 */
class ExecutionStatus {
    public $affectedItems ;
    public $matchedItems ;
    public $foundItems ;
    public $lastInsertId ;
    public $lastDocumentId ;
}


/**
 * Class Expression
 * @link https://www.php.net/manual/zh/class.mysql-xdevapi-expression.php
 * @package mysql_xdevapi
 */
class Expression {
    /* Properties */
    public $name ;

    /* Constructor */
    public function __construct ( string $expression ) {}
}


/**
 * Class Result
 * @link https://www.php.net/manual/zh/class.mysql-xdevapi-result.php
 * @package mysql_xdevapi
 */
class Result implements \mysql_xdevapi\BaseResult , \Traversable {
    /**
     * Get the last AUTO_INCREMENT value (last insert id).
     * @link https://www.php.net/manual/zh/mysql-xdevapi-result.getautoincrementvalue.php
     * @return int
     */
    public function getAutoIncrementValue () : int {}

    /**
     * Fetch the generated _id values from the last operation. The unique _id field is generated by the MySQL server.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-result.getgeneratedids.php
     * @return array|string[]
     */
    public function getGeneratedIds () : array {}


    /**
     * Retrieve warnings from the last Result operation.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-result.getwarnings.php
     * @return array|\mysql_xdevapi\Warning[]
     */
    public function getWarnings () : array {}

    /**
     * Retrieve the number of warnings from the last Result operation.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-result.getwarningscount.php
     * @return int
     */
    public function getWarningsCount () : int {}
}


/**
 * Class RowResult
 * @link https://www.php.net/manual/zh/class.mysql-xdevapi-rowresult.php
 * @package mysql_xdevapi
 */
class RowResult implements \mysql_xdevapi\BaseResult , \Traversable {

    /**
     * Fetch all the rows from the result set.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-rowresult.fetchall.php
     * @return array A numerical array with all results from the query; each result is an associative array. An empty array is returned if no rows are present.
     */
    public function fetchAll () : array {}

    /**
     * Fetch one result from the result set.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-rowresult.fetchone.php
     * @return array The result, as an associative array or NULL if no results are present.
     */
    public function fetchOne () : array {}

    /**
     * Retrieve the column count for columns present in the result set.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-rowresult.getcolumncount.php
     * @return int
     */
    public function getColumnsCount () : int {}

    /**
     * Retrieve column names for columns present in the result set.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-rowresult.getcolumnnames.php
     * @return array
     */
    public function getColumnNames () : array {}

    /**
     * Retrieve column metadata for columns present in the result set.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-rowresult.getcolumns.php
     * @return array|\mysql_xdevapi\FieldMetadata[]
     */
    public function getColumns () : array {}

    /**
     * Retrieve warnings from the last RowResult operation.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-rowresult.getwarnings.php
     * @return array|\mysql_xdevapi\Warning[]
     */
    public function getWarnings () : array {}

    /**
     * Retrieve the number of warnings from the last RowResult operation.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-rowresult.getwarningscount.php
     * @return int
     */
    public function getWarningsCount () : int {}
}


/**
 * Class Schema
 * @link https://www.php.net/manual/zh/class.mysql-xdevapi-schema.php
 * @package mysql_xdevapi
 */
class Schema implements \mysql_xdevapi\DatabaseObject {
    /* Properties */
    public $name ;

    /* Methods */
    /**
     * Create a collection within the schema.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-schema.createcollection.php
     * @param string $name
     * @return \mysql_xdevapi\Collection
     */
    public function createCollection ( string $name ) : \mysql_xdevapi\Collection {}

    /**
     * Drop collection from schema
     * @link https://www.php.net/manual/zh/mysql-xdevapi-schema.dropcollection.php
     * @param string $collection_name
     * @return bool
     */
    public function dropCollection ( string $collection_name ) : bool {}

    /**
     * Check if exists in database
     * Checks if the current object (schema, table, collection, or view) exists in the schema object.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-schema.existsindatabase.php
     * @return bool
     */
    public function existsInDatabase () : bool {}

    /**
     * Get a collection from the schema.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-schema.getcollection.php
     * @param string $name
     * @return \mysql_xdevapi\Collection
     */
    public function getCollection ( string $name ) : \mysql_xdevapi\Collection {}

    /**
     * Get a collection, but as a Table object instead of a Collection object.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-schema.getcollectionastable.php
     * @param string $name
     * @return \mysql_xdevapi\Table
     */
    public function getCollectionAsTable ( string $name ) : \mysql_xdevapi\Table {}

    /**
     * Fetch a list of collections for this schema.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-schema.getcollections.php
     * @return array|\mysql_xdevapi\Collection[] Array of all collections in this schema, where each array element value is a Collection object with the collection name as the key.
     */
    public function getCollections () : array {}

    /**
     * Get the name of the schema.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-schema.getname.php
     * @return string
     */
    public function getName () : string {}

    /**
     * Get a new Session object from the Schema object.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-schema.getsession.php
     * @return \mysql_xdevapi\Session
     */
    public function getSession () : \mysql_xdevapi\Session {}

    /**
     * Fetch a Table object for the provided table in the schema.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-schema.gettable.php
     * @param string $name
     * @return \mysql_xdevapi\Table
     */
    public function getTable ( string $name ) : \mysql_xdevapi\Table {}

    /**
     * Get schema tables
     * @link https://www.php.net/manual/zh/mysql-xdevapi-schema.gettables.php
     * @return array|\mysql_xdevapi\Table[] Array of all tables in this schema, where each array element value is a Table object with the table name as the key.
     */
    public function getTables () : array {}
}


/**
 * Interface SchemaObject
 * @link https://www.php.net/manual/zh/class.mysql-xdevapi-schemaobject.php
 * @package mysql_xdevapi
 */
interface SchemaObject extends \mysql_xdevapi\DatabaseObject {
    /* Methods */
    function getSchema () : \mysql_xdevapi\Schema;
}



/**
 * Class Session
 * @link https://www.php.net/manual/zh/class.mysql-xdevapi-session.php
 * @package mysql_xdevapi
 */
class Session {

    /**
     * Close the session with the server.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-session.close.php
     * @return bool
     */
    public function close () : bool {}

    /**
     * Commit the transaction.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-session.commit.php
     * @return Object
     */
    public function commit () : Object {}

    /**
     * Creates a new schema.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-session.createschema.php
     * @param string $schema_name
     * @return \mysql_xdevapi\Schema
     */
    public function createSchema ( string $schema_name ) : \mysql_xdevapi\Schema {}

    /**
     * Drop a schema (database).
     * @link https://www.php.net/manual/zh/mysql-xdevapi-session.dropschema.php
     * @param string $schema_name
     * @return bool
     */
    public function dropSchema ( string $schema_name ) : bool {}

    /**
     * Generate a Universal Unique IDentifier (UUID) generated according to » RFC 4122.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-session.generateuuid.php
     * @return string
     */
    public function generateUUID () : string {}

    /**
     * Get a new schema object
     * @link https://www.php.net/manual/zh/mysql-xdevapi-session.getschema.php
     * @param string $schema_name
     * @return \mysql_xdevapi\Schema
     */
    public function getSchema ( string $schema_name ) : \mysql_xdevapi\Schema {}

    /**
     * Get schema objects for all schemas available to the session.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-session.getschemas.php
     * @return \mysql_xdevapi\Schema[]
     */
    public function getSchemas () : array {}

    /**
     * Retrieve the MySQL server version for the session.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-session.getserverversion.php
     * @return int
     */
    public function getServerVersion () : int {}

    /**
     * Get a list of client connections to the session's MySQL server.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-session.listclients.php
     * @return array
     */
    public function listClients () : array {}

    /**
     * Add quotes
     * A quoting function to escape SQL names and identifiers. It escapes the identifier given in accordance to the settings of the current connection. This escape function should not be used to escape values.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-session.quotename.php
     * @param string $name
     * @return string
     */
    public function quoteName ( string $name ) : string {}

    /**
     * Release a previously set savepoint.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-session.releasesavepoint.php
     * @param string $name
     */
    public function releaseSavepoint ( string $name ) : void {}

    /**
     * Rollback the transaction.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-session.rollback.php
     */
    public function rollback () : void {}

    /**
     * Rollback transaction to savepoint
     * @link https://www.php.net/manual/zh/mysql-xdevapi-session.rollbackto.php
     * @param string $name
     */
    public function rollbackTo ( string $name ) : void {}

    /**
     * Create a new savepoint for the transaction.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-session.setsavepoint.php
     * @param string $name
     * @return string
     */
    public function setSavepoint (string $name ) : string {}

    /**
     * Create a native SQL statement. Placeholders are supported using the native "?" syntax. Use the execute method to execute the SQL statement.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-session.sql.php
     * @param string $query
     * @return SqlStatement
     */
    public function sql ( string $query ) : \mysql_xdevapi\SqlStatement {}

    /**
     * Start a new transaction.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-session.starttransaction.php
     */
    public function startTransaction () : void {}
}


/**
 * Class SqlStatement
 * @link https://www.php.net/manual/zh/class.mysql-xdevapi-sqlstatement.php
 * @package mysql_xdevapi
 */
class SqlStatement {
    /* Constants */
    const EXECUTE_ASYNC = 1 ;
    const BUFFERED = 2 ;

    /* Properties */
    public $statement ;

    /* Methods */
    /**
     * Bind statement parameters
     * @link https://www.php.net/manual/zh/mysql-xdevapi-sqlstatement.bind.php
     * @param string $param
     * @return \mysql_xdevapi\SqlStatement
     */
    public function bind ( string $param ) : \mysql_xdevapi\SqlStatement {}

    /**
     * Execute the operation
     * @link https://www.php.net/manual/zh/mysql-xdevapi-sqlstatement.execute.php
     * @return \mysql_xdevapi\Result
     */
    public function execute () : \mysql_xdevapi\Result {}

    /**
     * Get next result
     * @link https://www.php.net/manual/zh/mysql-xdevapi-sqlstatement.getnextresult.php
     * @return \mysql_xdevapi\Result
     */
    public function getNextResult () : \mysql_xdevapi\Result {}

    /**
     * Get result
     * @link https://www.php.net/manual/zh/mysql-xdevapi-sqlstatement.getresult.php
     * @return \mysql_xdevapi\Result
     */
    public function getResult () : \mysql_xdevapi\Result {}

    /**
     * Check for more results
     * @link https://www.php.net/manual/zh/mysql-xdevapi-sqlstatement.hasmoreresults.php
     * @return bool
     */
    public function hasMoreResults () : bool {}
}


/**
 * Class SqlStatementResult
 * @link https://www.php.net/manual/zh/class.mysql-xdevapi-sqlstatementresult.php
 * @package mysql_xdevapi
 */
class SqlStatementResult implements \mysql_xdevapi\BaseResult , \Traversable {
    /* Methods */
    /**
     * Fetch all the rows from the result set.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-sqlstatementresult.fetchall.php
     * @return array
     */
    public function fetchAll () : array {}

    /**
     * Fetch one row from the result set.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-sqlstatementresult.fetchone.php
     * @return array
     */
    public function fetchOne () : array {}

    /**
     * Get affected row count
     * @link https://www.php.net/manual/zh/mysql-xdevapi-sqlstatementresult.getaffecteditemscount.php
     * @return int
     */
    public function getAffectedItemsCount () : int {}

    /**
     * Get column count
     * @link https://www.php.net/manual/zh/mysql-xdevapi-sqlstatementresult.getcolumncount.php
     * @return int
     */
    public function getColumnsCount () : int {}

    /**
     * Get column names
     * @link https://www.php.net/manual/zh/mysql-xdevapi-sqlstatementresult.getcolumnnames.php
     * @return array
     */
    public function getColumnNames () : array {}

    /**
     * Get columns
     * @link https://www.php.net/manual/zh/mysql-xdevapi-sqlstatementresult.getcolumns.php
     * @return array
     */
    public function getColumns () : array {}

    /**
     * Get generated ids
     * @link https://www.php.net/manual/zh/mysql-xdevapi-sqlstatementresult.getgeneratedids.php
     * @return array
     */
    public function getGeneratedIds () : array {}

    /**
     * Get last insert id
     * @link https://www.php.net/manual/zh/mysql-xdevapi-sqlstatementresult.getlastinsertid.php
     * @return string
     */
    public function getLastInsertId () : string {}

    /**
     * Get warnings from last operation
     * @link https://www.php.net/manual/zh/mysql-xdevapi-sqlstatementresult.getwarnings.php
     * @return array|\mysql_xdevapi\Warning[]
     */
    public function getWarnings () : array {}

    /**
     * Get warning count from last operation
     * @link https://www.php.net/manual/zh/mysql-xdevapi-sqlstatementresult.getwarningcount.php
     * @return int
     */
    public function getWarningCounts () : int {}

    /**
     * Check if result has data
     * @link https://www.php.net/manual/zh/mysql-xdevapi-sqlstatementresult.hasdata.php
     * @return bool
     */
    public function hasData () : bool {}

    /**
     * Get next result
     * @link https://www.php.net/manual/zh/mysql-xdevapi-sqlstatementresult.nextresult.php
     * @return \mysql_xdevapi\Result
     */
    public function nextResult () : \mysql_xdevapi\Result {}
}


/**
 * Class Statement
 * @link https://www.php.net/manual/zh/class.mysql-xdevapi-statement.php
 * @package mysql_xdevapi
 */
class Statement {
    /* Constants */
    const EXECUTE_ASYNC = 1 ;
    const BUFFERED = 2 ;

    /* Methods */
    /**
     * Get next result
     * @link https://www.php.net/manual/zh/mysql-xdevapi-statement.getnextresult.php
     * @return \mysql_xdevapi\Result
     */
    public function getNextResult () : \mysql_xdevapi\Result {}

    /**
     * Get result
     * @link https://www.php.net/manual/zh/mysql-xdevapi-statement.getresult.php
     * @return Result
     */
    public function getResult () : \mysql_xdevapi\Result {}

    /**
     * Check if more results
     * @link https://www.php.net/manual/zh/mysql-xdevapi-statement.hasmoreresults.php
     * @return bool
     */
    public function hasMoreResults () : bool {}
}


/**
 * Class Table
 * @link https://www.php.net/manual/zh/class.mysql-xdevapi-table.php
 * @package mysql_xdevapi
 */
class Table implements \mysql_xdevapi\SchemaObject {
    /* Properties */
    public $name ;


    /* Methods */
    /**
     * Fetch the number of rows in the table.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-table.count.php
     * @return int
     */
    public function count () : int {}

    /**
     * Deletes rows from a table.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-table.delete.php
     * @return \mysql_xdevapi\TableDelete
     */
    public function delete () : \mysql_xdevapi\TableDelete {}

    /**
     * Verifies if this table exists in the database.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-table.existsindatabase.php
     * @return bool
     */
    public function existsInDatabase () : bool {}

    /**
     * Returns the name of this database object.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-table.getname.php
     * @return string
     */
    public function getName () : string {}

    /**
     * Fetch the schema associated with the table.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-table.getschema.php
     * @return \mysql_xdevapi\Schema
     */
    public function getSchema () : \mysql_xdevapi\Schema {}

    /**
     * Get session associated with the table.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-table.getsession.php
     * @return \mysql_xdevapi\Session
     */
    public function getSession () : \mysql_xdevapi\Session {}

    /**
     * Inserts rows into a table.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-table.insert.php
     * @param string|string[] $columns The columns to insert data into. Can be an array with one or more values, or a string.
     * @param string|string[] ...$additionalColumns Additional columns definitions.
     * @return \mysql_xdevapi\TableInsert
     */
    public function insert ( $columns, ...$additionalColumns ) : \mysql_xdevapi\TableInsert {}

    /**
     * Determine if the underlying object is a view or not.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-table.isview.php
     * @return bool
     */
    public function isView () : bool {}

    /**
     * Fetches data from a table.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-table.select.php
     * @param string|string[] $columns The columns to select data from. Can be an array with one or more values, or a string.
     * @param string|string[] ...$additionalColumns Additional columns parameter definitions.
     * @return \mysql_xdevapi\TableSelect
     */
    public function select ( $columns, ...$additionalColumns ) : \mysql_xdevapi\TableSelect {}

    /**
     * Updates columns in a table.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-table.update.php
     * @return \mysql_xdevapi\TableUpdate
     */
    public function update () : \mysql_xdevapi\TableUpdate {}
}


/**
 * Class TableDelete
 * @link https://www.php.net/manual/zh/class.mysql-xdevapi-tabledelete.php
 * @package mysql_xdevapi
 */
class TableDelete implements \mysql_xdevapi\Executable {
    /* Methods */
    /**
     * Binds a value to a specific placeholder.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-tabledelete.bind.php
     * @param array $placeholder_values
     * @return \mysql_xdevapi\TableDelete
     */
    public function bind ( array $placeholder_values ) : \mysql_xdevapi\TableDelete {}

    /**
     * Execute the delete query.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-tabledelete.execute.php
     * @return \mysql_xdevapi\Result
     */
    public function execute () : \mysql_xdevapi\Result {}

    /**
     * Sets the maximum number of records or documents to delete.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-tabledelete.limit.php
     * @param int $rows
     * @return \mysql_xdevapi\TableDelete
     */
    public function limit ( int $rows ) : \mysql_xdevapi\TableDelete {}

    /**
     * Set the order options for a result set.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-tabledelete.orderby.php
     * @param string $orderby_expr
     * @return \mysql_xdevapi\TableDelete
     */
    public function orderby ( string $orderby_expr ) : \mysql_xdevapi\TableDelete {}

    /**
     * Sets the search condition to filter.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-tabledelete.where.php
     * @param string $where_expr
     * @return \mysql_xdevapi\TableDelete
     */
    public function where ( string $where_expr ) : \mysql_xdevapi\TableDelete {}
}


/**
 * Class TableInsert
 * @link https://www.php.net/manual/zh/class.mysql-xdevapi-tableinsert.php
 * @package mysql_xdevapi
 */
class TableInsert implements \mysql_xdevapi\Executable {
    /**
     * Execute the statement.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-tableinsert.execute.php
     * @return \mysql_xdevapi\Result
     */
    public function execute () : \mysql_xdevapi\Result {}

    /**
     * Set the values to be inserted.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-tableinsert.values.php
     * @param array $row_values
     * @return \mysql_xdevapi\TableInsert
     */
    public function values ( array $row_values ) : \mysql_xdevapi\TableInsert {}
}


/**
 * Class TableSelect
 * @link https://www.php.net/manual/zh/class.mysql-xdevapi-tableselect.php
 * @package mysql_xdevapi
 */
class TableSelect implements mysql_xdevapi\Executable {
    /**
     * Binds a value to a specific placeholder.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-tableselect.bind.php
     * @param array $placeholder_values
     * @return \mysql_xdevapi\TableSelect
     */
    public function bind ( array $placeholder_values ) : \mysql_xdevapi\TableSelect {}

    /**
     * Execute the select statement by chaining it with the execute() method.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-tableselect.execute.php
     * @return \mysql_xdevapi\RowResult
     */
    public function execute () : \mysql_xdevapi\RowResult {}

    /**
     * Sets a grouping criteria for the result set.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-tableselect.groupby.php
     * @param mixed $sort_expr
     * @return \mysql_xdevapi\TableSelect
     */
    public function groupBy ( mixed $sort_expr ) : \mysql_xdevapi\TableSelect {}

    /**
     * Sets a condition for records to consider in aggregate function operations.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-tableselect.having.php
     * @param string $sort_expr
     * @return \mysql_xdevapi\TableSelect
     */
    public function having ( string $sort_expr ) : \mysql_xdevapi\TableSelect {}

    /**
     * Sets the maximum number of records or documents to return.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-tableselect.limit.php
     * @param int $rows
     * @return \mysql_xdevapi\TableSelect
     */
    public function limit ( int $rows ) : \mysql_xdevapi\TableSelect {}

    /**
     * Execute a read operation with EXCLUSIVE LOCK. Only one lock can be active at a time.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-tableselect.lockexclusive.php
     * @param int|null $lock_waiting_option
     * @return \mysql_xdevapi\TableSelect
     */
    public function lockExclusive (?int $lock_waiting_option ) : \mysql_xdevapi\TableSelect {}

    /**
     * Execute a read operation with SHARED LOCK. Only one lock can be active at a time.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-tableselect.lockshared.php
     * @param int|null $lock_waiting_option
     * @return \mysql_xdevapi\TableSelect
     */
    public function lockShared (?int $lock_waiting_option ) : \mysql_xdevapi\TableSelect {}

    /**
     * Skip given number of rows in result.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-tableselect.offset.php
     * @param int $position
     * @return \mysql_xdevapi\TableSelect
     */
    public function offset ( int $position ) : \mysql_xdevapi\TableSelect {}

    /**
     * Sets the order by criteria.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-tableselect.orderby.php
     * @param string|string[] ...$sort_expr
     * @return \mysql_xdevapi\TableSelect
     */
    public function orderby ( ...$sort_expr ) : \mysql_xdevapi\TableSelect {}

    /**
     * Sets the search condition to filter.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-tableselect.where.php
     * @param string $where_expr
     * @return \mysql_xdevapi\TableSelect
     */
    public function where ( string $where_expr ) : \mysql_xdevapi\TableSelect {}
}


/**
 * Class TableUpdate
 * @link https://www.php.net/manual/zh/class.mysql-xdevapi-tableupdate.php
 * @package mysql_xdevapi
 */
class TableUpdate implements \mysql_xdevapi\Executable {
    /**
     * Bind update query parameters
     * @link https://www.php.net/manual/zh/mysql-xdevapi-tableupdate.bind.php
     * @param array $placeholder_values The name of the placeholder, and the value to bind, defined as a JSON array.
     * @return \mysql_xdevapi\TableUpdate
     */
    public function bind ( array $placeholder_values ) : \mysql_xdevapi\TableUpdate {}

    /**
     * Executes the update statement.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-tableupdate.execute.php
     * @return \mysql_xdevapi\TableUpdate
     */
    public function execute () : \mysql_xdevapi\TableUpdate {}

    /**
     * Set the maximum number of records or documents update.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-tableupdate.limit.php
     * @param int $rows
     * @return \mysql_xdevapi\TableUpdate
     */
    public function limit ( int $rows ) : \mysql_xdevapi\TableUpdate {}

    /**
     * Sets the sorting criteria.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-tableupdate.orderby.php
     * @param ?string|?string[] ...$orderby_expr The expressions that define the order by criteria. Can be an array with one or more expressions, or a string.
     * @return \mysql_xdevapi\TableUpdate
     */
    public function orderby ( ...$orderby_expr) : \mysql_xdevapi\TableUpdate {}

    /**
     * Updates the column value on records in a table.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-tableupdate.set.php
     * @param string $table_field
     * @param string $expression_or_literal
     * @return \mysql_xdevapi\TableUpdate
     */
    public function set ( string $table_field , string $expression_or_literal ) : \mysql_xdevapi\TableUpdate {}

    /**
     * Set the search condition to filter.
     * @link https://www.php.net/manual/zh/mysql-xdevapi-tableupdate.where.php
     * @param string $where_expr
     * @return \mysql_xdevapi\TableUpdate
     */
    public function where ( string $where_expr ) : \mysql_xdevapi\TableUpdate {}
}


/**
 * Class Warning
 * @link https://www.php.net/manual/zh/class.mysql-xdevapi-warning.php
 * @package mysql_xdevapi
 */
class Warning {
    /* Properties */
    public $message ;
    public $level ;
    public $code ;

    /* Constructor */
    private function __construct () {}
}


/**
 * Class XSession
 * @link https://www.php.net/manual/zh/class.mysql-xdevapi-xsession.php
 * @package mysql_xdevapi
 */
class XSession {}
