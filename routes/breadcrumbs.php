<?php 
Breadcrumbs::for('showHome', function ($trail) {
    $trail->push('Home', route('showHome'));
});
// Home > Blog
Breadcrumbs::for('showProducts', function ($trail) {
    $trail->parent('showHome');
    $trail->push('Products', route('showProducts'));
});

// Home > Blog > [Category]
Breadcrumbs::for('showDetailProducts', function ($trail) {
    $trail->parent('showProducts');
    $trail->push('Samsung a20', route('showDetailProducts'));
});