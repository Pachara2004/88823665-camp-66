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
<div>
    <div class="content-wrapper">
        <section class="content">
            <div class="error-page">
                <h2 class="headline text-warning">404</h2>
                <div class="error-content">
                    <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>
                    <p>
                        We could not find the page you were looking for.
                        Meanwhile, you may <a href="../../index.html">return to dashboard</a> or try using the search
                        form.
                    </p>
                    <form class="search-form">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" name="submit" class="btn btn-warning"><i
                                        class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@section('message', __('Not Found'))
