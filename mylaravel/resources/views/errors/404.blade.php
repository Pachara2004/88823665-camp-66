@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>404 Error Page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .content-wrapper {
        padding: 20px;
    }

    .content-header {
        background-color: #fff;
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    .breadcrumb {
        background-color: transparent;
        padding: 0;
        margin: 0;
    }

    .error-page {
        text-align: center;
        padding: 50px 0;
    }

    .headline {
        font-size: 100px;
        color: #ffc107;
        margin: 0;
    }

    .error-content {
        margin-top: 20px;
    }

    .error-content h3 {
        font-size: 24px;
        color: #333;
    }

    .error-content p {
        font-size: 16px;
        color: #666;
    }

    .search-form {
        max-width: 300px;
        margin: 20px auto;
    }

    .search-form .input-group {
        display: flex;
    }

    .search-form .form-control {
        flex: 1;
        border: 1px solid #ddd;
        border-radius: 4px 0 0 4px;
        padding: 10px;
    }

    .search-form .btn {
        border: 1px solid #ffc107;
        background-color: #ffc107;
        color: #fff;
        border-radius: 0 4px 4px 0;
        padding: 10px 15px;
    }
</style>
@section('message', __('Not Found'))
