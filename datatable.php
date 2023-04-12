<?php
 
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'rsbsa_info';
 
// Table's primary key
$primaryKey = 'id';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'ID', 'dt' => 0 ),
    array( 'db' => 'RSBSA_NUMBER',  'dt' => 1 ),
    array( 'db' => 'LGU_RSBSA',   'dt' => 2 ),
    array( 'db' => 'LAST_NAME', 'dt' => 3,),
    array( 'db' => 'FIRST_NAME', 'dt' => 4 ),
    array( 'db' => 'MIDDLE_NAME',  'dt' => 5 ),
    array( 'db' => 'SUFFIX',   'dt' => 6 ),
    array( 'db' => 'BARANGAY', 'dt' => 7,),
    array( 'db' => 'MUNICIPALITY',   'dt' => 8 ),
    array( 'db' => 'PROVINCE', 'dt' => 9,),
    array( 'db' => 'BIRTHDAY',   'dt' => 10 ),
    array( 'db' => 'GENDER', 'dt' => 11,),

);
 
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'rsbsa_num',
    'host' => 'localhost'
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( 'vendor/DataTables/server-side/scripts/ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);