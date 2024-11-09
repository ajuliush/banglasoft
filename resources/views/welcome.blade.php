<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foundtation</title>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
</head>
<body>


    <!-- ---------- Header ---------- -->
    <header>
        <div class="container">
            <nav>
                <div class="nav_logo"><a href="#"><img src="{{ asset('assets') }}/Image/logo.png" alt="Logo"></a></div>

                <div class="nav_menu">
                    <ul class="nav_list">
                        <div class="dropdown">
                            <li class="home"><a href="./index.html">Home</a>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                    </svg></span>
                            </li>
                            <ul class="dropdown_list">
                                <li><a href="ons.html">Orgaization's Speece</a></li>
                                <li><a href="docu.html">All Documentation</a></li>
                                <li><a href="bdr.html">Blood Request Cheek</a></li>
                                <li><a href="profile.html">Profile</a></li>
                            </ul>
                        </div>
                        <li><a href="donat.html">Donation</a></li>
                        <li><a href="./bdr.html">Blood request</a></li>
                        <li><a href="incom.html">Income Expenditure</a></li>
                        <div class="dropdown">
                            <li class="home"><a href="./index.html">Project</a>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                    </svg></span>
                            </li>
                            <ul class="dropdown_list">
                                <li><a href="ffa.html">Food for All</a></li>
                                <li><a href="health.html">Health</a></li>
                                <li><a href="education.html">Education</a></li>
                            </ul>
                        </div>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="foundation.html">Foundations</a></li>
                        <button class="logout_m"><a href="#">Logout</a></button>
                    </ul>
                    <div class="search">
                        <form action="#" method="post" class="form_search">
                            <input type="search" placeholder="Search">
                            <span type="submit"><img src="{{ asset('assets') }}/Image/search.svg" alt="icon"></span>
                        </form>
                        <button class="logout"><a href="#">Logout</a></button>
                        <div class="nav_toggol"><img src="{{ asset('assets') }}/Image/circled-menu.png" alt=""></div>
                        <div class="close_toggol"><img src="{{ asset('assets') }}/Image/close.svg" alt=""></div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- ---------- Header end ---------- -->

    <!-- ---------- Id Card ---------- -->
    <section class="hero">
        <div class="container">
            <div class="foundation">
                @foreach ($foundations as $foundation)
                <div class="gellary_item">
                    <a href="{{ route('show', $foundation->slug) }}">
                        <img src="{{ asset('uploads/logo/'. $foundation->logo) }}" alt="">
                    </a>
                </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- ---------- Id Card end ---------- -->

    <!-- ---------- Privacy ---------- -->
    <section class="privacy_text hero">
        <div class="container">
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis dolores provident harum recusandae deserunt inventore repellat quisquam error, nostrum sunt incidunt quos eius maiores architecto dolore modi voluptas omnis ad dicta molestias, labore itaque laudantium corrupti? Autem modi iure deleniti ea ratione blanditiis quis, saepe odit eaque labore unde voluptatem asperiores quae quo non mollitia ipsum enim voluptate culpa libero nesciunt. Dolore eaque dolorem iusto reiciendis sint libero delectus illo quod reprehenderit at, molestias sapiente saepe sed eum in ipsa adipisci quis labore consectetur necessitatibus fugit. Consectetur, facere molestiae? Necessitatibus qui vitae perspiciatis excepturi, reiciendis voluptate reprehenderit tempora nisi nobis nemo, inventore, eligendi aut suscipit laudantium facilis sint itaque iure in mollitia voluptatibus impedit. Et atque temporibus commodi est quos doloribus, fugiat ad necessitatibus? Culpa sequi facere, iste, at ipsum consectetur qui nisi iure laudantium quisquam animi quas officiis aspernatur voluptatibus enim tempore aperiam recusandae eos, obcaecati natus non itaque impedit rem. Mollitia eos eveniet vero veniam suscipit magni unde! Vel quos nesciunt quaerat accusamus consequatur cupiditate deserunt quam inventore iste numquam modi officia impedit adipisci explicabo ipsa sed quod perferendis facilis molestiae magnam beatae, quo hic? Pariatur totam accusantium sapiente iure nostrum, laboriosam odit aliquam ratione sed sint, obcaecati vero mollitia, illum animi amet necessitatibus ipsam debitis provident. Tempore dicta fugit eius corporis. Non rerum eius maxime est praesentium delectus veritatis minima mollitia odit error eligendi, nam quae culpa provident modi esse. Accusamus deserunt necessitatibus temporibus magni optio impedit corporis, quo ducimus? Unde nobis non laborum, aut commodi deleniti aliquam nam aperiam magnam velit eius ipsam, eum corrupti a? Voluptates aut sequi quisquam aperiam amet dolores quidem quos esse quam, perspiciatis omnis commodi velit fuga. Dolorum, fugit ducimus. Aperiam dolorum porro laudantium quaerat repellendus quibusdam voluptas, alias exercitationem voluptates culpa dolor provident laboriosam ratione. Reprehenderit sequi dicta laborum ratione iure est omnis quisquam nesciunt sint sit, assumenda quod. Aspernatur sunt debitis rerum architecto et numquam voluptatem placeat eveniet corporis eius eligendi repudiandae, dolore dicta expedita hic blanditiis! Delectus, at deserunt? Odio ex autem dolore, fugit blanditiis consequatur eos beatae cupiditate iusto eaque cum a cumque exercitationem similique illum corrupti perferendis quos molestiae vel, natus voluptatum ipsa officiis. Doloribus omnis pariatur optio excepturi nihil voluptatibus officiis quod ipsum magni similique facere quis, ex tempora sapiente, expedita nulla cumque. Delectus eius est pariatur sint dolor, quod aspernatur recusandae voluptatem fuga itaque reiciendis. Maxime debitis sequi quisquam perferendis eius eum aliquam minima consequuntur qui, animi quae! Recusandae quas reiciendis amet reprehenderit, harum perspiciatis aliquid vitae ipsum ipsa consequuntur aperiam sunt quis doloribus eaque minus in pariatur fuga ducimus eum, hic exercitationem, voluptatum nemo tempora.
            </p>
        </div>
    </section>
    <!-- ---------- Privacy end ---------- -->
    <!-- ---------- Privacy ---------- -->
    <section class="about_text">
        <div class="container">
            <p>
                nostrum sunt incidunt quos eius maiores architecto dolore modi voluptas omnis ad dicta molestias, labore itaque laudantium corrupti? Autem modi iure deleniti ea ratione blanditiis quis, saepe odit eaque labore unde voluptatem asperiores quae quo non mollitia ipsum enim voluptate culpa libero nesciunt. Dolore eaque dolorem iusto reiciendis sint libero delectus illo quod reprehenderit at, molestias sapiente saepe sed eum in ipsa adipisci quis labore consectetur necessitatibus fugit. Consectetur, facere molestiae? Necessitatibus qui vitae perspiciatis excepturi, reiciendis voluptate reprehenderit tempora nisi nobis nemo, inventore, eligendi aut suscipit laudantium facilis sint itaque iure in mollitia voluptatibus impedit. Et atque temporibus commodi est quos doloribus, fugiat ad necessitatibus? Culpa sequi facere, iste, at ipsum consectetur qui nisi iure laudantium quisquam animi quas officiis aspernatur voluptatibus enim tempore aperiam recusandae eos, obcaecati natus non itaque impedit rem. Mollitia eos eveniet vero veniam suscipit magni unde! Vel quos nesciunt quaerat accusamus consequatur cupiditate deserunt quam inventore iste numquam modi officia impedit adipisci explicabo ipsa sed quod perferendis facilis molestiae magnam beatae, quo hic? Pariatur totam accusantium sapiente iure nostrum, laboriosam odit aliquam ratione sed sint, obcaecati vero mollitia, illum animi amet necessitatibus ipsam debitis provident. Tempore dicta fugit eius corporis. Non rerum eius maxime est praesentium delectus veritatis minima mollitia odit error eligendi, nam quae culpa provident modi esse. Accusamus deserunt necessitatibus temporibus magni optio impedit corporis, quo ducimus? Unde nobis non laborum, aut commodi deleniti aliquam nam aperiam magnam velit eius ipsam, eum corrupti a? Voluptates aut sequi quisquam aperiam amet dolores quidem quos esse quam, perspiciatis omnis commodi velit fuga. Dolorum, fugit ducimus. Aperiam dolorum porro laudantium quaerat repellendus quibusdam voluptas, alias exercitationem voluptates culpa dolor provident laboriosam ratione. Reprehenderit sequi dicta laborum ratione iure est omnis quisquam nesciunt sint sit, assumenda quod. Aspernatur sunt debitis rerum architecto et numquam voluptatem placeat eveniet corporis eius eligendi repudiandae, dolore dicta expedita hic blanditiis! Delectus, at deserunt? Odio ex autem dolore, fugit blanditiis consequatur eos beatae cupiditate iusto eaque cum a cumque exercitationem similique illum corrupti perferendis quos molestiae vel, natus voluptatum ipsa officiis. Doloribus omnis pariatur optio excepturi nihil voluptatibus officiis quod ipsum magni similique facere quis, ex tempora sapiente, expedita nulla cumque. Delectus eius est pariatur sint dolor, quod aspernatur recusandae voluptatem fuga itaque reiciendis. Maxime debitis sequi quisquam perferendis eius eum aliquam minima consequuntur qui, animi quae! Recusandae quas reiciendis amet reprehenderit, harum perspiciatis aliquid vitae ipsum ipsa consequuntur aperiam sunt quis doloribus eaque minus in pariatur fuga ducimus eum, hic exercitationem, voluptatum nemo tempora.
            </p>
        </div>
    </section>
    <!-- ---------- Privacy end ---------- -->

    <!-- ---------- Trans And Condition ---------- -->
    <section class="trans_condition hero">
        <div class="container">
            <p>
                Dolore eaque dolorem iusto reiciendis sint libero delectus illo quod reprehenderit at, molestias sapiente saepe sed eum in ipsa adipisci quis labore consectetur necessitatibus fugit. Consectetur, facere molestiae? Necessitatibus qui vitae perspiciatis excepturi, reiciendis voluptate reprehenderit tempora nisi nobis nemo, inventore, eligendi aut suscipit laudantium facilis sint itaque iure in mollitia voluptatibus impedit. Et atque temporibus commodi est quos doloribus, fugiat ad necessitatibus? Culpa sequi facere, iste, at ipsum consectetur qui nisi iure laudantium quisquam animi quas officiis aspernatur voluptatibus enim tempore aperiam recusandae eos, obcaecati natus non itaque impedit rem. Mollitia eos eveniet vero veniam suscipit magni unde! Vel quos nesciunt quaerat accusamus consequatur cupiditate deserunt quam inventore iste numquam modi officia impedit adipisci explicabo ipsa sed quod perferendis facilis molestiae magnam beatae, quo hic? Pariatur totam accusantium sapiente iure nostrum, laboriosam odit aliquam ratione sed sint, obcaecati vero mollitia, illum animi amet necessitatibus ipsam debitis provident. Tempore dicta fugit eius corporis. Non rerum eius maxime est praesentium delectus veritatis minima mollitia odit error eligendi, nam quae culpa provident modi esse. Accusamus deserunt necessitatibus temporibus magni optio impedit corporis, quo ducimus? Unde nobis non laborum, aut commodi deleniti aliquam nam aperiam magnam velit eius ipsam, eum corrupti a? Voluptates aut sequi quisquam aperiam amet dolores quidem quos esse quam, perspiciatis omnis commodi velit fuga. Dolorum, fugit ducimus. Aperiam dolorum porro laudantium quaerat repellendus quibusdam voluptas, alias exercitationem voluptates culpa dolor provident laboriosam ratione. Reprehenderit sequi dicta laborum ratione iure est omnis quisquam nesciunt sint sit, assumenda quod. Aspernatur sunt debitis rerum architecto et numquam voluptatem placeat eveniet corporis eius eligendi repudiandae, dolore dicta expedita hic blanditiis! Delectus, at deserunt? Odio ex autem dolore, fugit blanditiis consequatur eos beatae cupiditate iusto eaque cum a cumque exercitationem similique illum corrupti perferendis quos molestiae vel, natus voluptatum ipsa officiis. Doloribus omnis pariatur optio excepturi nihil voluptatibus officiis quod ipsum magni similique facere quis, ex tempora sapiente, expedita nulla cumque. Delectus eius est pariatur sint dolor, quod aspernatur recusandae voluptatem fuga itaque reiciendis. Maxime debitis sequi quisquam perferendis eius eum aliquam minima consequuntur qui, animi quae! Recusandae quas reiciendis amet reprehenderit, harum perspiciatis aliquid vitae ipsum ipsa consequuntur aperiam sunt quis doloribus eaque minus in pariatur fuga ducimus eum, hic exercitationem, voluptatum nemo tempora.
            </p>
        </div>
    </section>
    <!-- ---------- Trans And Condition end ---------- -->

    <!-- ---------- footer ---------- -->
    <footer>
        <div class="container">
            <!-- footer add -->

            <!-- footer list -->
            <div class="footer_data">
                <ul class="footer_list">
                    <li><a href="index.html">Home</a></li>
                    <li onclick="About()"><a href="#">About</a></li>
                    <li onclick="Privacy()"><a href="#">Privacy Policy</a></li>
                    <li onclick="TransCondition()"><a href="#">Trams & Condition</a></li>
                </ul>
            </div>
            <!-- footer help -->
            <div class="footer_help">
                <div class="footer_phone">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                    </svg>
                </div>
                <div class="footer_sms">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z" />
                    </svg>
                </div>
            </div>
        </div>
    </footer>
    <!-- ---------- footer end ---------- -->
    <script>
        // header menu
        const navToggol = document.querySelector('.nav_toggol');
        const closeToggol = document.querySelector('.close_toggol');
        navToggol.addEventListener('click', function() {
            document.querySelector('.nav_list').classList.add('show_list');
            closeToggol.style.display = "block";
            navToggol.style.display = "none";
        })

        closeToggol.addEventListener('click', function() {
            document.querySelector('.nav_list').classList.remove('show_list');
            closeToggol.style.display = "none";
            navToggol.style.display = "block";

        })
        // ---------- Footer ----------
        const hero = document.querySelector('.hero');
        const privacyText = document.querySelector('.privacy_text');
        const aboutText = document.querySelector('.about_text');
        const transCondi = document.querySelector('.trans_condition');

        function footerAll() {
            hero.style.display = 'none';
            privacyText.style.display = 'none';
            aboutText.style.display = 'none';
            transCondi.style.display = 'none';
        }

        function Privacy() {
            footerAll();
            privacyText.style.display = 'block';
        }

        function About() {
            footerAll();
            aboutText.style.display = 'block';
        }

        function TransCondition() {
            footerAll();
            transCondi.style.display = 'block';
        }

    </script>
</body>
</html>
