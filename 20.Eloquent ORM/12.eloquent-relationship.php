<?php 
/*
Has Relationship
* it indicates that one model "has" one or more related models
* the model that defines the relationship has the foreign key column. this means that the model that defines the relationship is the "parent" model, and the model that is related to it is the "child" model.

BelongsTo Relationship
* The "belongs" relationship, also known as the "inverse" relationship, defines the inverse of a "has" relationship.
* This means that the model that is related to the other model is the "parent" model, and the model thet defines the relationship is the "child" model.

// One to One Relationship

// Parent Model : User

function profile() {
return $this->hasOne(Profile::class);
}

// Child Model : Profile

function user() {
return $this->belongsTo(User::class);
}

// in UserController.php
function DemoAction(Request $request) {
    return User::with('profile')->get();
}

// One to Many Relationship

// Parent Model : User

function posts() {
return $this->hasMany(Post::class);
}

// Child Model : Post

function user() {
return $this->belongsTo(User::class);
}

// Many to Many Relationship

// Parent Model : User

function roles() {
return $this->belongsToMany(Role::class);
}

// Child Model : Role

function users() {
return $this->belongsToMany(User::class);
}