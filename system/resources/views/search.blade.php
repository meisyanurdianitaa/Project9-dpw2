<style>

body {
    background-image: linear-gradient(to right top, #D91B23, #124FEB);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center
}

.search {
    background-color: #fff;
    padding: 4px;
    border-radius: 5px
}

.search-1 {
    position: relative;
    width: 100%
}

.search-1 input {
    height: 45px;
    border: none;
    width: 100%;
    padding-left: 34px;
    padding-right: 10px;
    border-right: 2px solid #eee
}

.search-1 input:focus {
    border-color: none;
    box-shadow: none;
    outline: none
}

.search-1 i {
    position: absolute;
    top: 12px;
    left: 5px;
    font-size: 24px;
    color: #eee
}

::placeholder {
    color: #eee;
    opacity: 1
}

.search-2 {
    position: relative;
    width: 100%
}

.search-2 input {
    height: 45px;
    border: none;
    width: 100%;
    padding-left: 18px;
    padding-right: 100px
}

.search-2 input:focus {
    border-color: none;
    box-shadow: none;
    outline: none
}

.search-2 i {
    position: absolute;
    top: 12px;
    left: -10px;
    font-size: 24px;
    color: #eee
}

.search-2 button {
    position: absolute;
    right: 1px;
    top: 0px;
    border: none;
    height: 45px;
    background-color: red;
    color: #fff;
    width: 90px;
    border-radius: 4px
}

@media (max-width:800px) {
    .search-1 input {
        border-right: none;
        border-bottom: 1px solid #eee
    }

    .search-2 i {
        left: 4px
    }

    .search-2 input {
        padding-left: 34px
    }

    .search-2 button {
        height: 37px;
        top: 5px
    }
}

</style>
<link rel="stylesheet" href="{{url('public')}}/css/bootstrap.min.css">

<div class="container">
    <div class="search">
        <div class="row">
            <div class="col-md-6">
                <div class="search-1"> <i class='bx bx-search-alt'></i> <input type="text" placeholder="Search"> </div>
            </div>
            <div class="col-md-6">
                <div>
                    <div class="search-2"> <i class='bx bxs-map'></i> <input type="text" placeholder="San Francisco,USA"> <button>Search</button> </div>
                </div>
            </div>
        </div>
    </div>
</div>