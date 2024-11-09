<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation Admin</title>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="nav_logo">
                    <a href="#"><img src="{{ asset('assets') }}/Image/logo.png" alt="Logo"></a>
                </div>

                <div class="nav_menu">
                    <button class="Add_member"><a href="{{ route('logout') }}">LogOut</a></button>
                </div>
            </nav>
        </div>
    </header>
    <section class="container">
        <div class="fb_home">

            <div class="fbd">
                <div class="fb_genarel">
                    <div class="fbg_close" onclick="fbgClose()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                        </svg>
                    </div>
                    <div class="fb_img">
                        <img src="{{ asset('assets') }}/Image/hero_img.png" alt="img">
                        <h3>Md munna</h3>
                    </div>
                    <hr>
                    <h2>General</h2>
                    <hr>
                    <ul class="fb_list">
                        <li onclick="forntendC()">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                    <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                </svg>
                            </span>
                            <a href="#">Forntend Option</a>
                        </li>
                        <li onclick="accountC()">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                    <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                </svg>
                            </span>
                            <a href="#">Account</a>
                        </li>
                        <li onclick="smsC()">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                    <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                </svg>
                            </span>
                            <a href="#">SMS</a>
                        </li>
                        <li onclick="bloodReqC()">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                    <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                </svg>
                            </span>
                            <a href="#">Blood Request</a>
                        </li>
                        <li onclick="trackC()">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                    <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                </svg>
                            </span>
                            <a href="#">Tracking</a>
                        </li>
                        <li onclick="idCC()">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                    <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                </svg>
                            </span>
                            <a href="#">Id Card</a>
                        </li>
                        <li onclick="postC()">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                    <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                </svg>
                            </span>
                            <a href="#">Post</a>
                        </li>
                        <li onclick="postC()">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                    <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                </svg>
                            </span>
                            <a href="#">Foundation Admin</a>
                        </li>
                    </ul>
                </div>
                <div class="fb_db">
                    <div class="db_head">
                        <span onclick="fbgShowMenu()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </span>
                        <h1>Deshboard</h1>
                        <div class="nav_menu">
                            <div class="search">
                                <form action="#" method="post" class="form_search">
                                    <input type="search" placeholder="Search">
                                    <div type="submit"><img src="{{ asset('assets') }}/Image/search.svg" alt="icon"></div>
                                </form>
                                <button class="Add_member"><a href="#">Add Member</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="db_content">
                        <div class="db_item">
                            <div class="db_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                            </div>
                            <h1>2500</h1>
                            <h3>Division Member</h3>
                        </div>
                        <div class="db_item">
                            <div class="db_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                            </div>
                            <h1>2500</h1>
                            <h3>Union Member</h3>
                        </div>
                        <div class="db_item">
                            <div class="db_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                            </div>
                            <h1>2500</h1>
                            <h3>Life Member</h3>
                        </div>
                        <div class="db_item">
                            <div class="db_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                            </div>
                            <h1>2500</h1>
                            <h3>Volenter Member</h3>
                        </div>
                        <div class="db_item">
                            <div class="db_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                            </div>
                            <h1>2500</h1>
                            <h3>Volenter Member</h3>
                        </div>
                        <div class="db_item">
                            <div class="db_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                            </div>
                            <h1>2500</h1>
                            <h3>Volenter Member</h3>
                        </div>
                    </div>
                    <br>
                    <!-- forntend -->
                    <div id="forntendId">
                        <div class="profile_sms">
                            <div class="SMS_group" onclick="imageFC()">
                                <label for="Image">Image</label>
                                <input type="radio" checked name="fn" id="Image">
                            </div>
                            <div class="SMS_group" onclick="liveFC()">
                                <label for="Live">Live</label>
                                <input type="radio" name="fn" id="Live">
                            </div>
                            <div class="SMS_group" onclick="sliderFC()">
                                <label for="Slider">Slider</label>
                                <input type="radio" name="fn" id="Slider">
                            </div>
                            <div class="SMS_group" onclick="aboutFC()">
                                <label for="About">About</label>
                                <input type="radio" name="fn" id="About">
                            </div>
                            <div class="SMS_group" onclick="privacyFC()">
                                <label for="Privacy">Privacy</label>
                                <input type="radio" name="fn" id="Privacy">
                            </div>
                        </div>
                        <br>
                        <div id="imageF">
                            <h3>Image</h3>
                            <br>
                            <form action="{{ route('auth-logo') }}" method="post" enctype="multipart/form-data">
                                <div class="forntend">
                                    <li>Logo</li>
                                    @csrf
                                    <div class="form_group">
                                        <input type="file" name="image" id="image" accept="image/*" required>
                                    </div>
                                    <input type="submit" value="Save">
                                    {{-- <input type="submit" value="Edit"> --}}
                                    <a href="#">Edit</a>
                                </div>
                            </form>
                            <div class="forntend">
                                <li>Banner</li>
                                <div class="form_group">
                                    <input type="file">
                                </div>
                                <input type="submit" value="Save">
                                <input type="submit" value="Edit">
                            </div>
                            <div class="forntend">
                                <li>Number</li>
                                <div class="form_group">
                                    <input type="number">
                                </div>
                                <input type="submit" value="Save">
                                <input type="submit" value="Edit">
                            </div>
                            <div class="forntend">
                                <li>Email</li>
                                <div class="form_group">
                                    <input type="email">
                                </div>
                                <input type="submit" value="Save">
                                <input type="submit" value="Edit">
                            </div>
                            <div class="forntend">
                                <li>Title</li>
                                <div class="form_group">
                                    <textarea style=" padding: 10px;" cols="50" rows="2"></textarea>
                                </div>
                                <input type="submit" value="Save">
                                <input type="submit" value="Edit">
                            </div>
                            <div class="forntend">
                                <li>Description</li>
                                <div class="form_group">
                                    <textarea style=" padding: 10px;" cols="50" rows="2"></textarea>
                                </div>
                                <input type="submit" value="Save">
                                <input type="submit" value="Edit">
                            </div>

                            <!-- -----------Left/Right Poppup---------- -->
                            <!-- <div class="forntend">
                                <li>Left Poppup</li>
                                <div class="form_group">
                                    <input type="file" >
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Save">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Edit">
                                </div>
                            </div>
                            <div class="forntend">
                                <li>Right Poppup</li>
                                <div class="form_group">
                                    <input type="file" >
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Save">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Edit">
                                </div>
                            </div> -->
                            <br>
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Image</th>
                                        <th>On/Off</th>
                                        <th>Start Date</th>
                                        <th>Day</th>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ asset('assets') }}/Image/hero_img.jpg" alt=""></td>
                                        <td>
                                            <div class="o_btn" onclick="OnOfBtn()"><span></span></div>
                                        </td>
                                        <td>munna</td>
                                        <td>munna</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ asset('assets') }}/Image/hero_img.jpg" alt=""></td>
                                        <td>
                                            <div class="o_btn" onclick="OnOfBtn()"><span></span></div>
                                        </td>
                                        <td>munna</td>
                                        <td>munna</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                        </div>
                        <div id="liveF">
                            <h3>Live Section</h3>
                            <br>
                            <div class="forntend">
                                <li>Video</li>
                                <div class="form_group">
                                    <input type="file">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Save">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Edit">
                                </div>
                            </div>
                            <div class="forntend">
                                <li>Image</li>
                                <div class="form_group">
                                    <input type="file">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Save">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Edit">
                                </div>
                            </div>
                            <div class="forntend">
                                <li>Live</li>
                                <div class="form_group">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2   2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2     2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.   5 0 0 1 7 0z" />
                                    </svg>
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Save">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Edit">
                                </div>
                            </div>
                            <br>
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Image</th>
                                        <th>On/Off</th>
                                        <th>Start Date</th>
                                        <th>Day</th>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ asset('assets') }}/Image/hero_img.jpg" alt=""></td>
                                        <td>
                                            <div class="o_btn" onclick="OnOfBtn()"><span></span></div>
                                        </td>
                                        <td>munna</td>
                                        <td>munna</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ asset('assets') }}/Image/hero_img.jpg" alt=""></td>
                                        <td>
                                            <div class="o_btn" onclick="OnOfBtn()"><span></span></div>
                                        </td>
                                        <td>munna</td>
                                        <td>munna</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                        </div>
                        <div id="sliderF">
                            <h3>Slider</h3>
                            <br>
                            <div class="forntend">
                                <li>Text Slider</li>
                                <div class="form_group">
                                    <input type="file">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Save">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Edit">
                                </div>
                            </div>
                            <div class="forntend">
                                <li>Image Slider</li>
                                <div class="form_group">
                                    <input type="file">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Save">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Edit">
                                </div>
                            </div>
                            <br>
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Image</th>
                                        <th>On/Off</th>
                                        <th>Start Date</th>
                                        <th>Day</th>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ asset('assets') }}/Image/hero_img.jpg" alt=""></td>
                                        <td>
                                            <div class="o_btn" onclick="OnOfBtn()"><span></span></div>
                                        </td>
                                        <td>munna</td>
                                        <td>munna</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ asset('assets') }}/Image/hero_img.jpg" alt=""></td>
                                        <td>
                                            <div class="o_btn" onclick="OnOfBtn()"><span></span></div>
                                        </td>
                                        <td>munna</td>
                                        <td>munna</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                        </div>
                        <div id="aboutF">
                            <h3>About</h3>
                            <textarea style="width: 90%; padding: 10px;" rows="10"></textarea>
                            <br>
                            <input type="submit">
                        </div>
                        <div id="privacyF">
                            <h3>Privacy</h3>
                            <textarea style="width: 90%; padding: 10px;" rows="10"></textarea>
                            <br>
                            <input type="submit">
                        </div>
                    </div>
                    <!-- Account -->
                    <div id="account">
                        <div class="super_admin">
                            <form action="#" method="post">
                                <div class="form_search call_search">
                                    <input type="search" placeholder="Search">
                                    <span type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <table class="superA_table">
                            <tbody>
                                <tr>
                                    <th>Account</th>
                                    <th>Id No</th>
                                    <th>image</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td><a href="#">01</a></td>
                                    <td><a href="#">78657453743</a></td>
                                    <td><a href="#"><img src="{{ asset('assets') }}/Image/profile.jpg" alt=""></a></td>
                                    <td>
                                        <div class="form_select">
                                            <select id="gender" required>
                                                <option value="" selected>Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">02</a></td>
                                    <td><a href="#">453445</a></td>
                                    <td><a href="#"><img src="{{ asset('assets') }}/Image/profile.jpg" alt=""></a></td>
                                    <td>
                                        <div class="form_select">
                                            <select id="gender" required>
                                                <option value="" selected>Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <!-- SMS -->
                    <div id="smsId">
                        <div class="data_profile">
                            <form action="#" method="post">
                                <div class="profile_sms">
                                    <div class="SMS_group" onclick="mailSms()">
                                        <label for="mails">Mail</label>
                                        <input type="radio" checked name="sms_a" id="mails">
                                    </div>
                                    <div class="SMS_group" onclick="singleSms()">
                                        <label for="ssms">Single SMS</label>
                                        <input type="radio" name="sms_a" id="ssms">
                                    </div>
                                    <div class="SMS_group" onclick="groupSms()">
                                        <label for="gsms">Group sms</label>
                                        <input type="radio" name="sms_a" id="gsms">
                                    </div>
                                </div>

                                <!-- mail_sms -->
                                <div class="mail_sms" id="smsMail">
                                    <div class="SMS_group bldr_sms">
                                        <label for="sms">Massage</label>
                                        <br>
                                        <textarea id="sms" rows="7" placeholder="Massage"></textarea>
                                    </div>
                                    <div class="profile_countinue">
                                        <input type="submit" value="submit">
                                    </div>
                                </div>

                                <!-- Single SMS -->
                                <div class="single_sms" id="smsSingle">
                                    <br>
                                    <div class="form_group">
                                        <label for="pasient">Number</label>
                                        <input type="number" id="pasient" placeholder="Patient Name">
                                    </div>
                                    <div class="SMS_group bldr_sms">
                                        <label for="sms">Massage</label>
                                        <input type="file" class="smsFile">
                                        <br>
                                        <textarea id="sms" rows="7" placeholder="Massage"></textarea>
                                    </div>
                                    <div class="profile_countinue">
                                        <input type="submit" value="submit">
                                    </div>
                                </div>

                                <!-- Group sms -->
                                <div class="group_sms" id="smsGroup">
                                    <div class="SMS_group bldr_sms">
                                        <label for="sms">Massage</label>
                                        <br>
                                        <textarea id="sms" rows="7" placeholder="Massage"></textarea>
                                    </div>
                                    <div class="profile_countinue">
                                        <input type="submit" value="submit">
                                    </div>

                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- Blood RequestF -->
                    <div id="BloodReqestF">
                        <table>
                            <tbody>
                                <tr>
                                    <th>serial No</th>
                                    <th>Name</th>
                                    <th>Phone 1</th>
                                    <th>Phone 2</th>
                                    <th>Image</th>
                                    <th>Forword</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td><a href="#">01</a> </td>
                                    <td><a href="#">Lorem ipsum</a> </td>
                                    <td><a href="#">454524324324</a></td>
                                    <td><a href="#">454524324324</a></td>
                                    <td><a href="#"><img src="{{ asset('assets') }}/Image/profile.jpg" alt=""></a> </td>
                                    <td>
                                        <form action="#" method="post">
                                            <select id="gender" required>
                                                <option value="" selected>Select</option>
                                                <option value="male">Lorem ipsum dolor</option>
                                                <option value="female">Female</option>
                                            </select>
                                            <br>
                                            <br>
                                            <input style="padding: 5px;" type="submit" value="Sent">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="#" method="post">
                                            <select id="gender" required>
                                                <option value="" selected>Select</option>
                                                <option value="male">male</option>
                                                <option value="female">Female</option>
                                            </select>
                                            <br>
                                            <br>
                                            <input style="padding: 5px;" type="submit" value="Sent">
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <tbody>
                                <tr>
                                    <th>Division</th>
                                    <th>Distric</th>
                                    <th>Upzilla</th>
                                    <th>Patient Name</th>
                                    <th>Blood Group</th>
                                </tr>
                                <tr>
                                    <td><a href="#">munna</a> </td>
                                    <td><a href="#">munna</a> </td>
                                    <td><a href="#">munna</a></td>
                                    <td><a href="#">munna</a></td>
                                    <td><a href="#">munna</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- tracking -->
                    <div id="trackingId">
                        <br>
                        <h3>Tracking</h3>
                        <br>
                        <div class="data_profile">
                            <form action="#" method="post">
                                <div class="profile_items">
                                    <div class="profile_form">
                                        <div class="form_group">
                                            <label for="Division">Status</label>
                                            <div class="form_select">
                                                <select id="gender" required>
                                                    <option value="" selected>Select</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile_countinue">
                                        <input type="submit" value="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <table>
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <th>Account No</th>
                                    <th>Transction Id</th>
                                    <th>Last blood group</th>
                                    <th>Last donet time</th>
                                </tr>
                                <tr>
                                    <td>munna</td>
                                    <td>munna</td>
                                    <td>munna</td>
                                    <td>munna</td>
                                    <td>munna</td>
                                </tr>
                                <tr>
                                    <td>munna</td>
                                    <td>munna</td>
                                    <td>munna</td>
                                    <td>munna</td>
                                    <td>munna</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- post -->
                    <div id="post">
                        <div class="profile_sms">
                            <div class="SMS_group" onclick="foodAll()">
                                <label for="Food">Food for All</label>
                                <input type="radio" checked name="pa" id="Food">
                            </div>
                            <div class="SMS_group" onclick="foodHealth()">
                                <label for="Health">Health</label>
                                <input type="radio" name="pa" id="Health">
                            </div>
                            <div class="SMS_group" onclick="foodEducarion()">
                                <label for="Educarion">Educarion</label>
                                <input type="radio" name="pa" id="Educarion">
                            </div>
                            <div class="SMS_group" onclick="oganizationF()">
                                <label for="onf">Organaization Foundation</label>
                                <input type="radio" name="pa" id="onf">
                            </div>
                        </div>
                        <div class="food_all" id="allFood">
                            <br>
                            <h3>Food for All</h3>
                            <br>
                            <div class="forntend">
                                <li>Image</li>
                                <div class="form_group">
                                    <input type="file">
                                </div>
                            </div>
                            <div class="forntend">
                                <li>Title</li>
                                <div class="form_group">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="forntend">
                                <li>Description</li>
                                <div class="form_group">
                                    <input type="text">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Edit">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Save">
                                </div>
                            </div>
                            <br>
                            <table>
                                <tbody>
                                    <tr>
                                        <th>serial No</th>
                                        <th>Title Name</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th class="edit_section">Edit</th>
                                    </tr>
                                    <tr>
                                        <td><a href="#">01</a> </td>
                                        <td class="td_desc"><a href="#">Lorem ipsum dolor sit amet consectetur </a> </td>
                                        <td><a href="#"><img src="{{ asset('assets') }}/Image/profile.jpg" alt=""></a> </td>
                                        <td class="td_desc"><a href="#">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis deserunt voluptatum quae natus doloribus sit dolorem dolor accusamus, quo laboriosam!
                                            </a> </td>
                                        <td><a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                </svg>
                                            </a> </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">02</a> </td>
                                        <td class="td_desc"><a href="#">Lorem ipsum dolor sit amet consectetur </a> </td>
                                        <td><a href="#"><img src="{{ asset('assets') }}/Image/profile.jpg" alt=""></a> </td>
                                        <td class="td_desc"><a href="#">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis deserunt voluptatum quae natus doloribus sit dolorem dolor accusamus, quo laboriosam!
                                            </a> </td>
                                        <td><a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                </svg>
                                            </a> </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">03</a> </td>
                                        <td class="td_desc"><a href="#">Lorem ipsum dolor sit amet consectetur </a> </td>
                                        <td><a href="#"><img src="{{ asset('assets') }}/Image/profile.jpg" alt=""></a> </td>
                                        <td class="td_desc"><a href="#">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis deserunt voluptatum quae natus doloribus sit dolorem dolor accusamus, quo laboriosam!
                                            </a> </td>
                                        <td><a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                </svg>
                                            </a> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="food_all" id="healthFood">
                            <br>
                            <h3>Health</h3>
                            <br>
                            <div class="forntend">
                                <li>Image</li>
                                <div class="form_group">
                                    <input type="file">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Save">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Edit">
                                </div>
                            </div>
                            <div class="forntend">
                                <li>Title</li>
                                <div class="form_group">
                                    <input type="text">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Save">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Edit">
                                </div>
                            </div>
                            <div class="forntend">
                                <li>Description</li>
                                <div class="form_group">
                                    <input type="text">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Save">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Edit">
                                </div>
                            </div>
                            <br>
                            <table>
                                <tbody>
                                    <tr>
                                        <th>serial No</th>
                                        <th>Title Name</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Edit</th>
                                    </tr>
                                    <tr>
                                        <td><a href="#">01</a> </td>
                                        <td class="td_desc"><a href="#">Lorem ipsum dolor sit amet consectetur </a> </td>
                                        <td><a href="#"><img src="{{ asset('assets') }}/Image/profile.jpg" alt=""></a> </td>
                                        <td class="td_desc"><a href="#">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis deserunt voluptatum quae natus doloribus sit dolorem dolor accusamus, quo laboriosam!
                                            </a> </td>
                                        <td><a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                </svg>
                                            </a> </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">02</a> </td>
                                        <td class="td_desc"><a href="#">Lorem ipsum dolor sit amet consectetur </a> </td>
                                        <td><a href="#"><img src="{{ asset('assets') }}/Image/profile.jpg" alt=""></a> </td>
                                        <td class="td_desc"><a href="#">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis deserunt voluptatum quae natus doloribus sit dolorem dolor accusamus, quo laboriosam!
                                            </a> </td>
                                        <td><a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                </svg>
                                            </a> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="food_all" id="educationFood">
                            <br>
                            <h3>Education</h3>
                            <br>
                            <div class="forntend">
                                <li>Image</li>
                                <div class="form_group">
                                    <input type="file">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Save">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Edit">
                                </div>
                            </div>
                            <div class="forntend">
                                <li>Title</li>
                                <div class="form_group">
                                    <input type="text">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Save">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Edit">
                                </div>
                            </div>
                            <div class="forntend">
                                <li>Description</li>
                                <div class="form_group">
                                    <input type="text">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Save">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Edit">
                                </div>
                            </div>
                            <br>
                            <table>
                                <tbody>
                                    <tr>
                                        <th>serial No</th>
                                        <th>Title Name</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Edit</th>
                                    </tr>
                                    <tr>
                                        <td><a href="#">01</a> </td>
                                        <td class="td_desc"><a href="#">Lorem ipsum dolor sit amet consectetur </a> </td>
                                        <td><a href="#"><img src="{{ asset('assets') }}/Image/profile.jpg" alt=""></a> </td>
                                        <td class="td_desc"><a href="#">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis deserunt voluptatum quae natus doloribus sit dolorem dolor accusamus, quo laboriosam!
                                            </a> </td>
                                        <td><a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                </svg>
                                            </a> </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">02</a> </td>
                                        <td class="td_desc"><a href="#">Lorem ipsum dolor sit amet consectetur </a> </td>
                                        <td><a href="#"><img src="{{ asset('assets') }}/Image/profile.jpg" alt=""></a> </td>
                                        <td class="td_desc"><a href="#">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis deserunt voluptatum quae natus doloribus sit dolorem dolor accusamus, quo laboriosam!
                                            </a> </td>
                                        <td><a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                </svg>
                                            </a> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="food_all" id="orfFood">
                            <br>
                            <h3>Organaization Foundation</h3>
                            <br>
                            <div class="forntend">
                                <li>Image</li>
                                <div class="form_group">
                                    <input type="file">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Save">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Edit">
                                </div>
                            </div>
                            <div class="forntend">
                                <li>Title</li>
                                <div class="form_group">
                                    <input type="text">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Save">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Edit">
                                </div>
                            </div>
                            <div class="forntend">
                                <li>Description</li>
                                <div class="form_group">
                                    <input type="text">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Save">
                                </div>
                                <div class="profile_countinue">
                                    <input type="submit" value="Edit">
                                </div>
                            </div>
                            <br>
                            <table>
                                <tbody>
                                    <tr>
                                        <th>serial No</th>
                                        <th>Title Name</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Edit</th>
                                    </tr>
                                    <tr>
                                        <td><a href="#">01</a> </td>
                                        <td class="td_desc"><a href="#">Lorem ipsum dolor sit amet consectetur </a> </td>
                                        <td><a href="#"><img src="{{ asset('assets') }}/Image/profile.jpg" alt=""></a> </td>
                                        <td class="td_desc"><a href="#">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis deserunt voluptatum quae natus doloribus sit dolorem dolor accusamus, quo laboriosam!
                                            </a> </td>
                                        <td><a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                </svg>
                                            </a> </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">02</a> </td>
                                        <td class="td_desc"><a href="#">Lorem ipsum dolor sit amet consectetur </a> </td>
                                        <td><a href="#"><img src="{{ asset('assets') }}/Image/profile.jpg" alt=""></a> </td>
                                        <td class="td_desc"><a href="#">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis deserunt voluptatum quae natus doloribus sit dolorem dolor accusamus, quo laboriosam!
                                            </a> </td>
                                        <td><a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                </svg>
                                            </a> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- ---------- edit ----------
                    <section class="edit">
                        <div style="width: 100%; height: 300px; background-color: gray;"></div>
                    </section> -->
                </div>

            </div>
        </div>
    </section>
    <script>
        const fbGenarel = document.querySelector('.fb_genarel');

        function fbgShowMenu() {
            fbGenarel.style.left = '1%'
        }

        function fbgClose() {
            fbGenarel.style.left = '-100%'
        }
        // on/of btn
        const oBtn = document.querySelector('.o_btn');

        function OnOfBtn() {
            oBtn.classList.toggle('active')
        }
        // accaount/Post
        const forntendId = document.getElementById('forntendId');
        const account = document.getElementById('account');
        const smsId = document.getElementById('smsId');
        const BloodReqestF = document.getElementById('BloodReqestF');
        const trackingId = document.getElementById('trackingId');
        const post = document.getElementById('post');

        function accPostAll() {
            forntendId.style.display = 'none';
            account.style.display = 'none';
            smsId.style.display = 'none';
            BloodReqestF.style.display = 'none';
            trackingId.style.display = 'none';
            post.style.display = 'none';
        }
        // forntend --------------------------------------------------

        function forntendC() {
            accPostAll();
            forntendId.style.display = 'block';
        }

        const imageF = document.getElementById('imageF');
        const liveF = document.getElementById('liveF');
        const sliderF = document.getElementById('sliderF');
        const aboutF = document.getElementById('aboutF');
        const privacyF = document.getElementById('privacyF');

        function forntendILSAP() {
            imageF.style.display = 'none';
            liveF.style.display = 'none';
            sliderF.style.display = 'none';
            aboutF.style.display = 'none';
            privacyF.style.display = 'none';
        }

        function imageFC() {
            forntendILSAP();
            imageF.style.display = 'block';
        }

        function liveFC() {
            forntendILSAP();
            liveF.style.display = 'block';
        }

        function sliderFC() {
            forntendILSAP();
            sliderF.style.display = 'block';
        }

        function aboutFC() {
            forntendILSAP();
            aboutF.style.display = 'block';
        }

        function privacyFC() {
            forntendILSAP();
            privacyF.style.display = 'block';
        }
        // forntend --------------------------------------------------
        function accountC() {
            accPostAll();
            account.style.display = 'block';
        }
        // sms--------------------------------------------------------
        function smsC() {
            accPostAll();
            smsId.style.display = 'block';
        }
        // sms sub function design---------------------
        const smsMail = document.querySelector('#smsMail');
        const smsSingle = document.querySelector('#smsSingle');
        const smsGroup = document.querySelector('#smsGroup');

        function allsms() {
            smsMail.style.display = 'none';
            smsSingle.style.display = 'none';
            smsGroup.style.display = 'none';
        }

        function mailSms() {
            allsms()
            smsMail.style.display = 'block';
        }

        function singleSms() {
            allsms()
            smsSingle.style.display = 'block';
        }

        function groupSms() {
            allsms()
            smsGroup.style.display = 'block';
        }
        // sms--------------------------------------------------------
        function bloodReqC() {
            accPostAll();
            BloodReqestF.style.display = 'block';
        }

        function trackC() {
            accPostAll();
            trackingId.style.display = 'block';
        }
        // function idCC() {
        // accPostAll();
        // }
        function postC() {
            accPostAll();
            post.style.display = 'block';
        }

        // food for all
        const allFood = document.getElementById('allFood');
        const healthFood = document.getElementById('healthFood');
        const educationFood = document.getElementById('educationFood');
        const onfFood = document.getElementById('orfFood');

        function allFoofNone() {
            allFood.style.display = 'none';
            healthFood.style.display = 'none';
            educationFood.style.display = 'none';
            onfFood.style.display = 'none';
        }

        function foodAll() {
            allFoofNone();
            allFood.style.display = 'block';
        }

        function foodHealth() {
            allFoofNone();
            healthFood.style.display = 'block';
        }

        function foodEducarion() {
            allFoofNone();
            educationFood.style.display = 'block';
        }

        function oganizationF() {
            allFoofNone();
            onfFood.style.display = 'block';
        }

    </script>
</body>
</html>
