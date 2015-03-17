<?php
    class User extends Eloquent {
        protected $table        = 'admin';
        protected $primaryKey   = 'username';
        
        public $timestamps      = false;
    }
?>