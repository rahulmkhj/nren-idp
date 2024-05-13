<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Horizontal - Mazer Admin Dashboard</title>

    <link rel="shortcut icon" href="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2033%2034'%20fill-rule='evenodd'%20stroke-linejoin='round'%20stroke-miterlimit='2'%20xmlns:v='https://vecta.io/nano'%3e%3cpath%20d='M3%2027.472c0%204.409%206.18%205.552%2013.5%205.552%207.281%200%2013.5-1.103%2013.5-5.513s-6.179-5.552-13.5-5.552c-7.281%200-13.5%201.103-13.5%205.513z'%20fill='%23435ebe'%20fill-rule='nonzero'/%3e%3ccircle%20cx='16.5'%20cy='8.8'%20r='8.8'%20fill='%2341bbdd'/%3e%3c/svg%3e" type="image/x-icon">
    <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC" type="image/png">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/zuramai/mazer@docs/demo/assets/compiled/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/zuramai/mazer@docs/demo/assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/zuramai/mazer@docs/demo/assets/compiled/css/iconly.css">
</head>

<body>

<div id="app">
    <div id="main" class="layout-horizontal">
        <header class="mb-5">
            <div class="header-top">
                <div class="container">
                    <div class="logo">
                        <a href="index.html"><img src="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20152%2034'%20fill-rule='evenodd'%20stroke-linejoin='round'%20stroke-miterlimit='2'%3e%3cpath%20d='M0%2027.472c0%204.409%206.18%205.552%2013.5%205.552%207.281%200%2013.5-1.103%2013.5-5.513s-6.179-5.552-13.5-5.552c-7.281%200-13.5%201.103-13.5%205.513z'%20fill='%23435ebe'%20fill-rule='nonzero'/%3e%3ccircle%20cx='13.5'%20cy='8.8'%20r='8.8'%20fill='%2341bbdd'/%3e%3cpath%20d='M71.676%203.22c.709%200%201.279.228%201.71.684.431.431.646%201.013.646%201.748v22.496c0%20.709-.203%201.267-.608%201.672s-.937.608-1.596.608-1.178-.203-1.558-.608-.57-.963-.57-1.672V12.492l-6.46%2012.236c-.304.557-.633.975-.988%201.254-.355.253-.773.38-1.254.38s-.899-.127-1.254-.38-.684-.671-.988-1.254l-6.498-12.046v15.466c0%20.684-.203%201.241-.608%201.672-.38.405-.899.608-1.558.608s-1.178-.203-1.558-.608-.57-.963-.57-1.672V5.652c0-.735.203-1.317.608-1.748.431-.456%201.001-.684%201.71-.684.988%200%201.761.545%202.318%201.634l8.436%2016.074%208.398-16.074c.557-1.089%201.305-1.634%202.242-1.634zm15.801%207.942c2.584%200%204.497.646%205.738%201.938%201.267%201.267%201.9%203.205%201.9%205.814v9.272c0%20.684-.203%201.229-.608%201.634-.405.38-.962.57-1.672.57-.658%200-1.203-.203-1.634-.608-.405-.405-.608-.937-.608-1.596v-.836c-.431.988-1.114%201.761-2.052%202.318-.912.557-1.976.836-3.192.836-1.241%200-2.368-.253-3.382-.76s-1.811-1.203-2.394-2.09-.874-1.875-.874-2.964c0-1.368.342-2.445%201.026-3.23.71-.785%201.85-1.355%203.42-1.71s3.737-.532%206.498-.532h.95v-.874c0-1.241-.266-2.141-.798-2.698-.532-.583-1.393-.874-2.584-.874a7.78%207.78%200%200%200-2.242.342c-.76.203-1.659.507-2.698.912-.658.329-1.14.494-1.444.494-.456%200-.836-.165-1.14-.494-.278-.329-.418-.76-.418-1.292%200-.431.102-.798.304-1.102.228-.329.596-.633%201.102-.912.887-.481%201.938-.861%203.154-1.14%201.242-.279%202.458-.418%203.648-.418zm-1.178%2015.922c1.267%200%202.293-.418%203.078-1.254.811-.861%201.216-1.963%201.216-3.306v-.798h-.684c-1.697%200-3.015.076-3.952.228s-1.608.418-2.014.798-.608.899-.608%201.558c0%20.811.279%201.482.836%202.014.583.507%201.292.76%202.128.76zm27.476-.456c1.418%200%202.128.595%202.128%201.786%200%20.557-.178%201.001-.532%201.33-.355.304-.887.456-1.596.456h-12.692c-.634%200-1.153-.203-1.558-.608a1.97%201.97%200%200%201-.608-1.444c0-.583.228-1.14.684-1.672l9.766-11.286h-8.474c-.71%200-1.242-.152-1.596-.456s-.532-.747-.532-1.33.177-1.026.532-1.33.886-.456%201.596-.456h12.274c.658%200%201.178.203%201.558.608.405.38.608.861.608%201.444%200%20.608-.216%201.165-.646%201.672l-9.804%2011.286h8.892zm19.762-1.52c.431%200%20.773.165%201.026.494.279.329.418.773.418%201.33%200%20.785-.468%201.444-1.406%201.976-.861.481-1.836.874-2.926%201.178-1.089.279-2.128.418-3.116.418-2.989%200-5.358-.861-7.106-2.584s-2.622-4.079-2.622-7.068c0-1.9.38-3.585%201.14-5.054s1.824-2.609%203.192-3.42c1.394-.811%202.964-1.216%204.712-1.216%201.672%200%203.129.367%204.37%201.102s2.204%201.773%202.888%203.116%201.026%202.926%201.026%204.75c0%201.089-.481%201.634-1.444%201.634h-11.21c.152%201.748.646%203.04%201.482%203.876.836.811%202.052%201.216%203.648%201.216.811%200%201.52-.101%202.128-.304.634-.203%201.343-.481%202.128-.836.76-.405%201.318-.608%201.672-.608zm-6.574-10.602c-1.292%200-2.33.405-3.116%201.216-.76.811-1.216%201.976-1.368%203.496h8.588c-.05-1.545-.43-2.711-1.14-3.496-.709-.811-1.697-1.216-2.964-1.216zm22.43-3.268c.658-.051%201.178.089%201.558.418s.57.823.57%201.482c0%20.684-.165%201.191-.494%201.52s-.925.545-1.786.646l-1.14.114c-1.495.152-2.597.659-3.306%201.52-.684.861-1.026%201.938-1.026%203.23v7.98c0%20.735-.228%201.305-.684%201.71-.456.38-1.026.57-1.71.57s-1.254-.19-1.71-.57c-.431-.405-.646-.975-.646-1.71V13.442c0-.709.215-1.254.646-1.634.456-.38%201.013-.57%201.672-.57s1.19.19%201.596.57c.405.355.608.874.608%201.558v1.52c.481-1.115%201.19-1.976%202.128-2.584.962-.608%202.026-.95%203.192-1.026l.532-.038z'%20fill='%23435ebe'%20fill-rule='nonzero'/%3e%3c/svg%3e" alt="Logo"></a>
                    </div>
                    <div class="header-top-right">

                        <div class="dropdown">
                            <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="avatar avatar-md2" >
                                    <img src="./assets/compiled/jpg/1.jpg" alt="Avatar">
                                </div>
                                <div class="text">
                                    <h6 class="user-dropdown-name">John Ducky</h6>
                                    <p class="user-dropdown-status text-sm text-muted">Member</p>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
                                <li><a class="dropdown-item" href="#">My Account</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="auth-login.html">Logout</a></li>
                            </ul>
                        </div>

                        <!-- Burger button responsive -->
                        <a href="#" class="burger-btn d-block d-xl-none">
                            <i class="bi bi-justify fs-3"></i>
                        </a>
                    </div>
                </div>
            </div>
            <nav class="main-navbar">
                <div class="container">
                    <ul>



                        <li
                            class="menu-item  ">
                            <a href="index.html" class='menu-link'>
                                <span><i class="bi bi-grid-fill"></i> Dashboard</span>
                            </a>
                        </li>



                        <li
                            class="menu-item  has-sub">
                            <a href="#" class='menu-link'>
                                <span><i class="bi bi-stack"></i> Components</span>
                            </a>
                            <div
                                class="submenu ">
                                <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                <div class="submenu-group-wrapper">


                                    <ul class="submenu-group">

                                        <li
                                            class="submenu-item  ">
                                            <a href="component-alert.html"
                                               class='submenu-link'>Alert</a>


                                        </li>



                                        <li
                                            class="submenu-item  ">
                                            <a href="component-badge.html"
                                               class='submenu-link'>Badge</a>


                                        </li>



                                        <li
                                            class="submenu-item  ">
                                            <a href="component-breadcrumb.html"
                                               class='submenu-link'>Breadcrumb</a>


                                        </li>



                                        <li
                                            class="submenu-item  ">
                                            <a href="component-button.html"
                                               class='submenu-link'>Button</a>


                                        </li>



                                        <li
                                            class="submenu-item  ">
                                            <a href="component-card.html"
                                               class='submenu-link'>Card</a>


                                        </li>



                                        <li
                                            class="submenu-item  ">
                                            <a href="component-carousel.html"
                                               class='submenu-link'>Carousel</a>


                                        </li>



                                        <li
                                            class="submenu-item  ">
                                            <a href="component-collapse.html"
                                               class='submenu-link'>Collapse</a>


                                        </li>



                                        <li
                                            class="submenu-item  ">
                                            <a href="component-dropdown.html"
                                               class='submenu-link'>Dropdown</a>


                                        </li>

                                    </ul>



                                    <ul class="submenu-group">

                                        <li
                                            class="submenu-item  ">
                                            <a href="component-list-group.html"
                                               class='submenu-link'>List Group</a>


                                        </li>



                                        <li
                                            class="submenu-item  ">
                                            <a href="component-modal.html"
                                               class='submenu-link'>Modal</a>


                                        </li>



                                        <li
                                            class="submenu-item  ">
                                            <a href="component-navs.html"
                                               class='submenu-link'>Navs</a>


                                        </li>



                                        <li
                                            class="submenu-item  ">
                                            <a href="component-pagination.html"
                                               class='submenu-link'>Pagination</a>


                                        </li>



                                        <li
                                            class="submenu-item  ">
                                            <a href="component-progress.html"
                                               class='submenu-link'>Progress</a>


                                        </li>



                                        <li
                                            class="submenu-item  ">
                                            <a href="component-spinner.html"
                                               class='submenu-link'>Spinner</a>


                                        </li>



                                        <li
                                            class="submenu-item  ">
                                            <a href="component-tooltip.html"
                                               class='submenu-link'>Tooltip</a>


                                        </li>



                                        <li
                                            class="submenu-item  has-sub">
                                            <a href="#"
                                               class='submenu-link'>Extra Components</a>


                                            <!-- 3 Level Submenu -->
                                            <ul class="subsubmenu">

                                                <li class="subsubmenu-item ">
                                                    <a href="extra-component-avatar.html" class="subsubmenu-link">Avatar</a>
                                                </li>

                                                <li class="subsubmenu-item ">
                                                    <a href="extra-component-comment.html" class="subsubmenu-link">Comment</a>
                                                </li>

                                                <li class="subsubmenu-item ">
                                                    <a href="extra-component-sweetalert.html" class="subsubmenu-link">Sweet Alert</a>
                                                </li>

                                                <li class="subsubmenu-item ">
                                                    <a href="extra-component-toastify.html" class="subsubmenu-link">Toastify</a>
                                                </li>

                                                <li class="subsubmenu-item ">
                                                    <a href="extra-component-rating.html" class="subsubmenu-link">Rating</a>
                                                </li>

                                                <li class="subsubmenu-item ">
                                                    <a href="extra-component-divider.html" class="subsubmenu-link">Divider</a>
                                                </li>

                                            </ul>

                                        </li>

                                    </ul>


                                </div>
                            </div>
                        </li>



                        <li
                            class="menu-item active has-sub">
                            <a href="#" class='menu-link'>
                                <span><i class="bi bi-grid-1x2-fill"></i> Layouts</span>
                            </a>
                            <div
                                class="submenu ">
                                <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                <div class="submenu-group-wrapper">


                                    <ul class="submenu-group">

                                        <li
                                            class="submenu-item  ">
                                            <a href="layout-default.html"
                                               class='submenu-link'>Default Layout</a>


                                        </li>



                                        <li
                                            class="submenu-item  ">
                                            <a href="layout-vertical-1-column.html"
                                               class='submenu-link'>1 Column</a>


                                        </li>



                                        <li
                                            class="submenu-item  ">
                                            <a href="layout-vertical-navbar.html"
                                               class='submenu-link'>Vertical Navbar</a>


                                        </li>



                                        <li
                                            class="submenu-item  ">
                                            <a href="layout-rtl.html"
                                               class='submenu-link'>RTL Layout</a>


                                        </li>



                                        <li
                                            class="submenu-item active ">
                                            <a href="layout-horizontal.html"
                                               class='submenu-link'>Horizontal Menu</a>


                                        </li>

                                    </ul>


                                </div>
                            </div>
                        </li>



                        <li
                            class="menu-item  has-sub">
                            <a href="#" class='menu-link'>
                                <span><i class="bi bi-file-earmark-medical-fill"></i> Forms</span>
                            </a>
                            <div
                                class="submenu ">
                                <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                <div class="submenu-group-wrapper">


                                    <ul class="submenu-group">

                                        <li
                                            class="submenu-item  has-sub">
                                            <a href="#"
                                               class='submenu-link'>Form Elements</a>


                                            <!-- 3 Level Submenu -->
                                            <ul class="subsubmenu">

                                                <li class="subsubmenu-item ">
                                                    <a href="form-element-input.html" class="subsubmenu-link">Input</a>
                                                </li>

                                                <li class="subsubmenu-item ">
                                                    <a href="form-element-input-group.html" class="subsubmenu-link">Input Group</a>
                                                </li>

                                                <li class="subsubmenu-item ">
                                                    <a href="form-element-select.html" class="subsubmenu-link">Select</a>
                                                </li>

                                                <li class="subsubmenu-item ">
                                                    <a href="form-element-radio.html" class="subsubmenu-link">Radio</a>
                                                </li>

                                                <li class="subsubmenu-item ">
                                                    <a href="form-element-checkbox.html" class="subsubmenu-link">Checkbox</a>
                                                </li>

                                                <li class="subsubmenu-item ">
                                                    <a href="form-element-textarea.html" class="subsubmenu-link">Textarea</a>
                                                </li>

                                            </ul>

                                        </li>



                                        <li
                                            class="submenu-item  ">
                                            <a href="form-layout.html"
                                               class='submenu-link'>Form Layout</a>


                                        </li>



                                        <li
                                            class="submenu-item  has-sub">
                                            <a href="#"
                                               class='submenu-link'>Form Validation</a>


                                            <!-- 3 Level Submenu -->
                                            <ul class="subsubmenu">

                                                <li class="subsubmenu-item ">
                                                    <a href="form-validation-parsley.html" class="subsubmenu-link">Parsley</a>
                                                </li>

                                            </ul>

                                        </li>



                                        <li
                                            class="submenu-item  has-sub">
                                            <a href="#"
                                               class='submenu-link'>Form Editor</a>


                                            <!-- 3 Level Submenu -->
                                            <ul class="subsubmenu">

                                                <li class="subsubmenu-item ">
                                                    <a href="form-editor-quill.html" class="subsubmenu-link">Quill</a>
                                                </li>

                                                <li class="subsubmenu-item ">
                                                    <a href="form-editor-ckeditor.html" class="subsubmenu-link">CKEditor</a>
                                                </li>

                                                <li class="subsubmenu-item ">
                                                    <a href="form-editor-summernote.html" class="subsubmenu-link">Summernote</a>
                                                </li>

                                                <li class="subsubmenu-item ">
                                                    <a href="form-editor-tinymce.html" class="subsubmenu-link">TinyMCE</a>
                                                </li>

                                            </ul>

                                        </li>

                                    </ul>


                                </div>
                            </div>
                        </li>



                        <li
                            class="menu-item  has-sub">
                            <a href="#" class='menu-link'>
                                <span><i class="bi bi-table"></i> Table</span>
                            </a>
                            <div
                                class="submenu ">
                                <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                <div class="submenu-group-wrapper">


                                    <ul class="submenu-group">

                                        <li
                                            class="submenu-item  ">
                                            <a href="table.html"
                                               class='submenu-link'>Table</a>


                                        </li>



                                        <li
                                            class="submenu-item  ">
                                            <a href="table-datatable.html"
                                               class='submenu-link'>Datatable</a>


                                        </li>



                                        <li
                                            class="submenu-item  ">
                                            <a href="table-datatable-jquery.html"
                                               class='submenu-link'>Datatable (jQuery)</a>


                                        </li>

                                    </ul>


                                </div>
                            </div>
                        </li>



                        <li
                            class="menu-item  has-sub">
                            <a href="#" class='menu-link'>
                                <span><i class="bi bi-plus-square-fill"></i> Extras</span>
                            </a>
                            <div
                                class="submenu ">
                                <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                <div class="submenu-group-wrapper">


                                    <ul class="submenu-group">

                                        <li
                                            class="submenu-item  has-sub">
                                            <a href="#"
                                               class='submenu-link'>Widgets</a>


                                            <!-- 3 Level Submenu -->
                                            <ul class="subsubmenu">

                                                <li class="subsubmenu-item ">
                                                    <a href="ui-widgets-chatbox.html" class="subsubmenu-link">Chatbox</a>
                                                </li>

                                                <li class="subsubmenu-item ">
                                                    <a href="ui-widgets-pricing.html" class="subsubmenu-link">Pricing</a>
                                                </li>

                                                <li class="subsubmenu-item ">
                                                    <a href="ui-widgets-todolist.html" class="subsubmenu-link">To-do List</a>
                                                </li>

                                            </ul>

                                        </li>



                                        <li
                                            class="submenu-item  has-sub">
                                            <a href="#"
                                               class='submenu-link'>Icons</a>


                                            <!-- 3 Level Submenu -->
                                            <ul class="subsubmenu">

                                                <li class="subsubmenu-item ">
                                                    <a href="ui-icons-bootstrap-icons.html" class="subsubmenu-link">Bootstrap Icons </a>
                                                </li>

                                                <li class="subsubmenu-item ">
                                                    <a href="ui-icons-fontawesome.html" class="subsubmenu-link">Fontawesome</a>
                                                </li>

                                                <li class="subsubmenu-item ">
                                                    <a href="ui-icons-dripicons.html" class="subsubmenu-link">Dripicons</a>
                                                </li>

                                            </ul>

                                        </li>



                                        <li
                                            class="submenu-item  has-sub">
                                            <a href="#"
                                               class='submenu-link'>Charts</a>


                                            <!-- 3 Level Submenu -->
                                            <ul class="subsubmenu">

                                                <li class="subsubmenu-item ">
                                                    <a href="ui-chart-chartjs.html" class="subsubmenu-link">ChartJS</a>
                                                </li>

                                                <li class="subsubmenu-item ">
                                                    <a href="ui-chart-apexcharts.html" class="subsubmenu-link">Apexcharts</a>
                                                </li>

                                            </ul>

                                        </li>

                                    </ul>


                                </div>
                            </div>
                        </li>



                        <li
                            class="menu-item  has-sub">
                            <a href="#" class='menu-link'>
                                <span><i class="bi bi-file-earmark-fill"></i> Pages</span>
                            </a>
                            <div
                                class="submenu ">
                                <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                <div class="submenu-group-wrapper">


                                    <ul class="submenu-group">

                                        <li
                                            class="submenu-item  has-sub">
                                            <a href="#"
                                               class='submenu-link'>Authentication</a>


                                            <!-- 3 Level Submenu -->
                                            <ul class="subsubmenu">

                                                <li class="subsubmenu-item ">
                                                    <a href="auth-login.html" class="subsubmenu-link">Login</a>
                                                </li>

                                                <li class="subsubmenu-item ">
                                                    <a href="auth-register.html" class="subsubmenu-link">Register</a>
                                                </li>

                                                <li class="subsubmenu-item ">
                                                    <a href="auth-forgot-password.html" class="subsubmenu-link">Forgot Password</a>
                                                </li>

                                            </ul>

                                        </li>



                                        <li
                                            class="submenu-item  has-sub">
                                            <a href="#"
                                               class='submenu-link'>Errors</a>


                                            <!-- 3 Level Submenu -->
                                            <ul class="subsubmenu">

                                                <li class="subsubmenu-item ">
                                                    <a href="error-403.html" class="subsubmenu-link">403</a>
                                                </li>

                                                <li class="subsubmenu-item ">
                                                    <a href="error-404.html" class="subsubmenu-link">404</a>
                                                </li>

                                                <li class="subsubmenu-item ">
                                                    <a href="error-500.html" class="subsubmenu-link">500</a>
                                                </li>

                                            </ul>

                                        </li>



                                        <li
                                            class="submenu-item  ">
                                            <a href="ui-file-uploader.html"
                                               class='submenu-link'>File Uploader</a>


                                        </li>



                                        <li
                                            class="submenu-item  has-sub">
                                            <a href="#"
                                               class='submenu-link'>Maps</a>


                                            <!-- 3 Level Submenu -->
                                            <ul class="subsubmenu">

                                                <li class="subsubmenu-item ">
                                                    <a href="ui-map-google-map.html" class="subsubmenu-link">Google Map</a>
                                                </li>

                                                <li class="subsubmenu-item ">
                                                    <a href="ui-map-jsvectormap.html" class="subsubmenu-link">JS Vector Map</a>
                                                </li>

                                            </ul>

                                        </li>



                                        <li
                                            class="submenu-item  ">
                                            <a href="application-email.html"
                                               class='submenu-link'>Email Application</a>


                                        </li>



                                        <li
                                            class="submenu-item  ">
                                            <a href="application-chat.html"
                                               class='submenu-link'>Chat Application</a>


                                        </li>



                                        <li
                                            class="submenu-item  ">
                                            <a href="application-gallery.html"
                                               class='submenu-link'>Photo Gallery</a>


                                        </li>



                                        <li
                                            class="submenu-item  ">
                                            <a href="application-checkout.html"
                                               class='submenu-link'>Checkout Page</a>


                                        </li>

                                    </ul>


                                </div>
                            </div>
                        </li>



                        <li
                            class="menu-item  has-sub">
                            <a href="#" class='menu-link'>
                                <span><i class="bi bi-life-preserver"></i> Support</span>
                            </a>
                            <div
                                class="submenu ">
                                <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                <div class="submenu-group-wrapper">


                                    <ul class="submenu-group">

                                        <li
                                            class="submenu-item  ">
                                            <a href="https://zuramai.github.io/mazer/docs"
                                               class='submenu-link'>Documentation</a>


                                        </li>



                                        <li
                                            class="submenu-item  ">
                                            <a href="https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md"
                                               class='submenu-link'>Contribute</a>


                                        </li>



                                        <li
                                            class="submenu-item  ">
                                            <a href="https://github.com/zuramai/mazer#donation"
                                               class='submenu-link'>Donate</a>


                                        </li>

                                    </ul>


                                </div>
                            </div>
                        </li>


                    </ul>
                </div>
            </nav>

        </header>

        <div class="content-wrapper container">

            <div class="page-heading">
                <h3>Horizontal Layout</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                <div class="stats-icon purple mb-2">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Profile Views</h6>
                                                <h6 class="font-extrabold mb-0">112.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                <div class="stats-icon blue mb-2">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Followers</h6>
                                                <h6 class="font-extrabold mb-0">183.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                <div class="stats-icon green mb-2">
                                                    <i class="iconly-boldAdd-User"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Following</h6>
                                                <h6 class="font-extrabold mb-0">80.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                <div class="stats-icon red mb-2">
                                                    <i class="iconly-boldBookmark"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Saved Post</h6>
                                                <h6 class="font-extrabold mb-0">112</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Profile Visit</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-profile-visit"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Profile Visit</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <svg class="bi text-primary" width="32" height="32" fill="blue"
                                                         style="width:10px">
                                                        <use
                                                            xlink:href="assets/static/images/bootstrap-icons.svg#circle-fill" />
                                                    </svg>
                                                    <h5 class="mb-0 ms-3">Europe</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-0">862</h5>
                                            </div>
                                            <div class="col-12">
                                                <div id="chart-europe"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <svg class="bi text-success" width="32" height="32" fill="blue"
                                                         style="width:10px">
                                                        <use
                                                            xlink:href="assets/static/images/bootstrap-icons.svg#circle-fill" />
                                                    </svg>
                                                    <h5 class="mb-0 ms-3">America</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-0">375</h5>
                                            </div>
                                            <div class="col-12">
                                                <div id="chart-america"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="d-flex align-items-center">
                                                    <svg class="bi text-success" width="32" height="32" fill="blue"
                                                         style="width:10px">
                                                        <use
                                                            xlink:href="assets/static/images/bootstrap-icons.svg#circle-fill" />
                                                    </svg>
                                                    <h5 class="mb-0 ms-3">India</h5>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <h5 class="mb-0 text-end">625</h5>
                                            </div>
                                            <div class="col-12">
                                                <div id="chart-india"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <svg class="bi text-danger" width="32" height="32" fill="blue"
                                                         style="width:10px">
                                                        <use
                                                            xlink:href="assets/static/images/bootstrap-icons.svg#circle-fill" />
                                                    </svg>
                                                    <h5 class="mb-0 ms-3">Indonesia</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-0">1025</h5>
                                            </div>
                                            <div class="col-12">
                                                <div id="chart-indonesia"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Latest Comments</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Comment</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="col-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-md">
                                                                <img src="./assets/compiled/jpg/5.jpg">
                                                            </div>
                                                            <p class="font-bold ms-3 mb-0">Cantik</p>
                                                        </div>
                                                    </td>
                                                    <td class="col-auto">
                                                        <p class=" mb-0">Congratulations on your graduation!</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-md">
                                                                <img src="./assets/compiled/jpg/2.jpg">
                                                            </div>
                                                            <p class="font-bold ms-3 mb-0">Ganteng</p>
                                                        </div>
                                                    </td>
                                                    <td class="col-auto">
                                                        <p class=" mb-0">Wow amazing design! Can you make another tutorial for
                                                            this design?</p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-body py-4 px-5">

                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="./assets/compiled/jpg/1.jpg" alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">John Duck</h5>
                                        <h6 class="text-muted mb-0">@johnducky</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Recent Messages</h4>
                            </div>
                            <div class="card-content pb-4">
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="./assets/compiled/jpg/4.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">Hank Schrader</h5>
                                        <h6 class="text-muted mb-0">@johnducky</h6>
                                    </div>
                                </div>
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="./assets/compiled/jpg/5.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">Dean Winchester</h5>
                                        <h6 class="text-muted mb-0">@imdean</h6>
                                    </div>
                                </div>
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="./assets/compiled/jpg/1.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">John Dodol</h5>
                                        <h6 class="text-muted mb-0">@dodoljohn</h6>
                                    </div>
                                </div>
                                <div class="px-4">
                                    <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>Start
                                        Conversation</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Visitors Profile</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-visitors-profile"></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>

        <footer>
            <div class="container">
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2023 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="https://saugi.me">Saugi</a></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="assets/static/js/components/dark.js"></script>
<script src="assets/static/js/pages/horizontal-layout.js"></script>
<script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<script src="assets/compiled/js/app.js"></script>
</body>

</html>