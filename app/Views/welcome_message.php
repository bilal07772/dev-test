<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rick and Morty</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- STYLES -->

    <style {csp-style-nonce}>
        * {
            transition: background-color 300ms ease, color 300ms ease;
        }
button{
    background:rgba(221, 72, 20, .8) !important;
    border: none !important;
}
        *:focus {
            background-color: rgba(221, 72, 20, .2);
            outline: none;
        }

        html, body {
            color: rgba(33, 37, 41, 1);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-size: 16px;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }

        header {
            background-color: rgba(247, 248, 249, 1);
            padding: .4rem 0 0;
        }

        .menu {
            padding: .4rem 2rem;
        }
        label{
            font-weight: bold;
            padding-right: 10px;
        }

        header ul {
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            list-style-type: none;
            margin: 0;
            overflow: hidden;
            padding: 0;
            text-align: right;
        }

        header li {
            display: inline-block;
        }

        header li a {
            border-radius: 5px;
            color: rgba(0, 0, 0, .5);
            display: block;
            height: 44px;
            text-decoration: none;
        }

        header li.menu-item a {
            border-radius: 5px;
            margin: 5px 0;
            height: 38px;
            line-height: 36px;
            padding: .4rem .65rem;
            text-align: center;
        }

        header li.menu-item a:hover,
        header li.menu-item a:focus {
            background-color: rgba(221, 72, 20, .2);
            color: rgba(221, 72, 20, 1);
        }

        header .logo {
            float: left;
            height: 44px;
            padding: .4rem .5rem;
        }

        header .menu-toggle {
            display: none;
            float: right;
            font-size: 2rem;
            font-weight: bold;
        }

        header .menu-toggle button {
            background-color: rgba(221, 72, 20, .6);
            border: none;
            border-radius: 3px;
            color: rgba(255, 255, 255, 1);
            cursor: pointer;
            font: inherit;
            font-size: 1.3rem;
            height: 36px;
            padding: 0;
            margin: 11px 0;
            overflow: visible;
            width: 40px;
        }

        header .menu-toggle button:hover,
        header .menu-toggle button:focus {
            background-color: rgba(221, 72, 20, .8);
            color: rgba(255, 255, 255, .8);
        }

        header .heroe {
            margin: 0 auto;
            max-width: 1100px;
            padding: 1rem 1.75rem 1.75rem 1.75rem;
        }

        header .heroe h1 {
            font-size: 2.5rem;
            font-weight: 500;
        }

        header .heroe h2 {
            font-size: 1.5rem;
            font-weight: 300;
        }

        section {
            margin: 0 auto;
            max-width: 1100px;
            padding: 2.5rem 1.75rem 3.5rem 1.75rem;
        }

        section h1 {
            margin-bottom: 2.5rem;
        }

        section h2 {
            font-size: 120%;
            line-height: 2.5rem;
            padding-top: 1.5rem;
        }

        section pre {
            background-color: rgba(247, 248, 249, 1);
            border: 1px solid rgba(242, 242, 242, 1);
            display: block;
            font-size: .9rem;
            margin: 2rem 0;
            padding: 1rem 1.5rem;
            white-space: pre-wrap;
            word-break: break-all;
        }

        section code {
            display: block;
        }

        section a {
            color: rgba(221, 72, 20, 1);
        }

        section svg {
            margin-bottom: -5px;
            margin-right: 5px;
            width: 25px;
        }

        .further {
            background-color: rgba(247, 248, 249, 1);
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            border-top: 1px solid rgba(242, 242, 242, 1);
        }

        .further h2:first-of-type {
            padding-top: 0;
        }

        footer {
            background-color: rgba(221, 72, 20, .8);
            text-align: center;
        }

        footer .environment {
            color: rgba(255, 255, 255, 1);
            padding: 2rem 1.75rem;
        }

        footer .copyrights {
            background-color: rgba(62, 62, 62, 1);
            color: rgba(200, 200, 200, 1);
            padding: .25rem 1.75rem;
        }

        @media (max-width: 559px) {
            header ul {
                padding: 0;
            }

            header .menu-toggle {
                padding: 0 1rem;
            }

            header .menu-item {
                background-color: rgba(244, 245, 246, 1);
                border-top: 1px solid rgba(242, 242, 242, 1);
                margin: 0 15px;
                width: calc(100% - 30px);
            }

            header .menu-toggle {
                display: block;
            }

            header .hidden {
                display: none;
            }

            header li.menu-item a {
                background-color: rgba(221, 72, 20, .1);
            }

            header li.menu-item a:hover,
            header li.menu-item a:focus {
                background-color: rgba(221, 72, 20, .7);
                color: rgba(255, 255, 255, .8);
            }
        }
    </style>
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>


    <div class="heroe">

        <h1>Welcome to Rick & Morton Encyclopedia</h1>

        <h2>Shows you the list of charactre and full library.</h2>

    </div>

</header>

<!-- CONTENT -->

<section>

    <div class="form-search form-search-style-04 d-flex mr-auto pt-3 pb-0 center-block"
         style="position: relative;z-index: 1;">
        <div class="card search bg-white mb-1 border-0 rounded-0 px-0">
            <div class="card-header bg-transparent border-0 pt-4 pb-0 px-0">
                <h4 class="card-title text-primary-grid">Search</h4>
            </div>
            <div class="card-body col-form-label-sm pb-42 px-0">
                <form autocomplete="off" role="form" id="frm_cust_booking">
                    <div class="form-search form-search-style-03">
                        <div class="form-group" style="display: inline-block;">
                            <div class="input-group d-flex align-items-center">
                                <label for="where" class="input-group-prepend text-dark">
                                    Name</label>
                                <input type="text" class="form-control bg-transparent"
                                       id="name"  name="name" placeholder=>
                            </div>
                        </div>
                        <div class="form-group" style="display: inline-block;">
                            <div class="  input-group d-flex align-items-center">
                                <label for="what" class="input-group-prepend text-dark font-weight-semibold">
                                    Origin</label>
                                <input type="text"
                                       class=" form-control bg-transparent"
                                       id="origin"  name="origin" placeholder="e.g Earth" >
                            </div>
                        </div>
                        <div class="form-group" style="display: inline-block;">
                            <div class="  input-group d-flex align-items-center">
                                <label for="what" class="input-group-prepend text-dark font-weight-semibold">
                                    Species</label>
                                <input type="text"
                                       class=" form-control bg-transparent"
                                       id="species"  name="species" placeholder="e.g Human" >
                            </div>
                        </div>
                        <div class="form-group" style="display: inline-block;">
                            <div class="input-group">
                                <button type="button" id="searchs_button" onclick="loadMoreResult();"
                                        class="mr-1 btn btn-icon-left btn-primary  btn-responsive font-size-md">
                                    <i class="fal fa-search"></i>
                                    Search
                                </button>
                                <button type="reset" id="reset_button"
                                        class="mr-1 btn btn-icon-left btn-primary  btn-responsive font-size-md">
                                    <i class="fal fa-redo"></i>
                                    Reset
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div id="row_error" class="alert alert-danger mb-6 alert-dismissible fade  d-flex align-items-center pr-3"
                 style="display: none !important;">
                <div class="font-size-lg py-0 mr-6 font-weight-semibold">Please provide search criteria!
                </div>
                <div class="ml-auto">
                    <a href="#" class="alert-button py-0 font-size-h3 lh-1" data-dismiss="alert" aria-label="Close"><i
                                class="fal fa-times"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="further">

    <section>
        <div class="pb-5" id="postList">
            <table class="table table-hover table-responsive-lg table-responsive-md table-responsive-sm table-responsive-xl">
                <thead>
                <tr>
                    <th style="width: 15%">Image</th>
                    <th style="width: 15%">Name</th>
                    <th style="width: 10%">Species</th>
                    <th style="width: 15%">Origin</th>
                    <th style="width: 10%">Episodes</th>
                </tr>
                </thead>
                <tbody id="table_rows">
                <?php
                if ($characters->results && count($characters->results) > 0) {
                    foreach ($characters->results as $result) { ?>
                        <tr>
                            <td><img src="<?= $result->image ?>" class="card-img-top image"/>
                            </td>
                            <td><?= $result->name ?>
                            </td>
                            <td>
                                <span class="status "><?= $result->species ?></span>
                            </td>
                            <td>
                                <span class="status "><?= $result->origin->name ?></span>

                            </td>
                            <td>
                                <?php if (isset($result->episode) && count(($result->episode)) > 0) { ?>
                                    <?php foreach($result->episode as $key=>$episode)?>
                                    <p class="status "><?= $episode ?></p>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php }
                }
                ?>
                </tbody>
            </table>

        </div>
        <div class=" btn btn-warning " style="background:rgba(221, 72, 20, .8) !important;font-weight: bold;width: 100%;" id="load_more" st onclick="loadMoreResult('more')">
            Load More Results
        </div>

    </section>

</div>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>
    <div class="environment">

        <p>Page rendered in {elapsed_time} seconds</p>

        <p>Environment: <?= ENVIRONMENT ?></p>

    </div>


<input type="hidden" name="page" id="page" value="" />
</footer>

<!-- SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">

    function loadMoreResult(flag) {
        var page= $('#page').val();
        $.ajax({
            type: 'GET',
            url: '/home/ajaxBasicPaginationResponse/',
            data: {
                'page':page+1,
                'name': $('#name').val(),
                'species': $('#species').val(),
                'origin': $('#origin').val()
            },

            success: function (response) {
                if (response) {
                    var data = (response.data);
                    if (flag != 'more') {
                        $('#table_rows').empty();
                        $('#table_rows').html(data);
                    } else {
                        $('#page').val(page+1);
                    $('#table_rows').append(data);
                    }
                }
            }
        });
        return true;
    }
</script>

<!-- -->

</body>
</html>
