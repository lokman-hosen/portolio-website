<?php


/**
 * Set message
 *
 * @param string $type
 * @param string $label
 * @return string
 */
function setMessage($type, $label = '')
{
    $label = ucfirst(strtolower($label));

    if(strtolower($type)=='create') {
        $msg = $label." has been created successfully";
    } elseif(strtolower($type)=='update') {
        $msg = $label." has been updated successfully";
    } elseif(strtolower($type)=='delete') {
        $msg = $label." has been deleted successfully";
    } elseif(strtolower($type)=='create.error') {
        $msg = "Error in saving ".$label;
    }elseif(strtolower($type)=='update.error') {
        $msg = "Error in updating ".$label;
    } else {
        $msg = '';
    }
    return $msg;
}



/**
 * get status
 *
 * @return array
 */

function getStatus($statsu){
    return $statsu == 1 ? 'Active' : 'Inactive';
}

/**
 * get status
 *
 * @param int $status_id
 * @return string
 */
function setStatus($status_id = '')
{
    if ($status_id == 0) {
        $status = '<span class="label label-inline label-danger">Inactive</span>';
    } else if($status_id == 1) {
        $status = '<span class="label label-inline label-success">Active</span>';
    } else {
        $status = '';
    }

    return $status;
}


function getCurrentStatus($status){
    return $status == 1 ? 'Active' : 'Inactive';
}


/**
 * Make select box
 *
 * @param array $data
 * @param int $value
 * @return string
 */



function checkEmpty($value){
    return isset($value) ? (!empty($value) ? $value : null) : null;
}

function checkNull($value){
    return isset($value) ? (!empty($value) ? $value : '--') : '--';
}
