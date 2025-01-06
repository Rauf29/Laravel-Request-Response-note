<?php
/*
 * Table name: brands then Model name: Brand
 * Table name: product_details then Model name: ProductDetail
 * if we follow this convention no need to define table name inside model. Other wise we need to define table name inside model.  
 protected $table = 'product_details';

 * Model assume that corresponding database table has a primary key column named id.
 * Eloquent assumes that the primary key is an incrementing interger value.
 * if necessary, you may define a protected $primaryKey property
 
 protected $primaryKey = 'used_id';
 public $incrementing = false;
 protected $keyType = 'string';

 *Model expectes created_at and updated_at columns exist on corresponding database table.
 * Eloquent will automatically set these column's values when inserting and updating records.
 * if you do not want timestamps, set the $timestamps property to false.
 
 public $timestamps = false;