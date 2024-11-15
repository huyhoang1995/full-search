<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<style>
    /* General button styling */
    .pagination a,
    .pagination button {
        display: inline-block;
        padding: 8px 16px;
        margin: 0 4px;
        color: #007bff;
        border: 1px solid #007bff;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    /* Hover effect */
    .pagination a:hover,
    .pagination button:hover {
        background-color: #007bff !important;
        color: #fff !important;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15);
    }

    /* Disabled button styling */
    .pagination button:disabled {
        color: #6c757d !important;
        border-color: #6c757d;
        cursor: not-allowed;
        background-color: #f8f9fa !important;
        box-shadow: none;
    }

    /* Active button styling */
    .pagination a.active {
        background-color: #28a745 !important;
        /* Green color for active page */
        color: #fff !important;
        border-color: #28a745 !important;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15);
    }

    /* Small screens */
    @media (max-width: 576px) {

        .pagination a,
        .pagination button {
            padding: 6px 12px;
            font-size: 0.9em;
        }
    }

    .h-100vh {
        height: 100vh;
    }

    .btn-circle {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0;
    }
</style>

<body>
    <div class="row bg-light h-100vh">
        <div class="col-md-2">
            <div class=" border-right p-3 mt-5 h-100" id="sidebar-wrapper">
                <div class="list-group list-group-flush">
                    <a href="{{ route('list-scout') }}" class="list-group-item list-group-item-action bg-light">Algolia</a>
                    <a href="{{ route('list-posts') }}" class="list-group-item list-group-item-action bg-light">Meilisearch</a>
                    <a href="{{ route('list-posts') }}" class="list-group-item list-group-item-action bg-light">Elasticsearch</a>
                    <a href="{{ route('list') }}" class="list-group-item list-group-item-action bg-light">List</a>
                </div>
            </div>
        </div>

        <div class="col-md-10">
            <x-header />

            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</html>