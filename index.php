<!DOCTYPE>
<html>

<head>
    <title>Timeline</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <script>
        function switchMenu() {
            var menu = document.getElementsByClassName("menu")[0];
            var menublock = document.getElementsByClassName("menu-block")[0];
            if (menu.style.display == "") {
                menu.setAttribute("style", "display: inline-block; height: 150%;");
                menublock.setAttribute("style", "height: 150%;");

            } else {
                menu.removeAttribute("style");
                menublock.removeAttribute("style");
            }
        }
    </script>
</head>

<body>

    <div class="menu-block">
        <button class="open-menu visible-mob" onclick="switchMenu()">
            <div></div>
            <div></div>
            <div></div>
        </button>
        <a href="#" class="logo">
            <img src="img/AtomLogo32-32w.png" id="logo-img" alt="logo">
        </a>

        <div class="menu">
            <a href="index.php"><i class="fas fa-sync-alt"></i></a>
            <a href="stages-chat.html"><i class="fas fa-users"></i></a>
            <a href="timeline-user.html"><i class="far fa-clock"></i></a>
            <a href="pages-admin.html"><i class="fas fa-file-alt"></i></a>
            <a href="add-edit-process-admin.html"><i class="fas fa-briefcase"></i></a>
            <a href="download-admin.html"><i class="fas fa-download"></i></a>
            <a href="service-all.html"><i class="fas fa-calendar-alt"></i></a>
            <a href="service-admin.html"><i class="fas fa-link"></i></a>
            <a href="archive-user.html"><i class="fas fa-envelope"></i></a>
            <a href="stages-chat-user.html"><i class="fas fa-question-circle"></i></a>
            <a href="#"><i class="fas fa-power-off"></i></a>
        </div>
    </div>

    <div class="empty-block visible-mob"></div>
    <noscript class="red-back">
        <h1>JavaScript is disabled in your browser.</h1>
        <div class="text">For use full features of the site please enable Javascript "How do I enable it?" or upgrade to a JavaScript-capable browser. After enabling the JavaScript, reload this page (F5).</div>
    </noscript>

    <div class="top-block">
        <div class="types-message-block">
            <a href="" class="type-message gray-back">NORMAL message. <br>Private or Public. #1</a>
            <a href="" class="type-message gray-back">NORMAL message. <br>Private or Public. #2</a>
            <a href="" class="type-message green-back">APPROVAL message. <br>Private or Public. #1</a>
            <a href="" class="type-message green-back">APPROVAL message. <br>Private or Public. #2</a>
            <a href="" class="type-message red-back">URGENT message. <br>Private or Public. #1</a>
        </div>
    </div>
    <div class="content">
        <div class="filter-block">
            <div class="left-block">
                <h1>Timeline</h1>
            </div>
            <div class="right-block">
                <form action="">
                    <select name="name">
                        <option>All Name</option>
                        <option>Name 1</option>
                        <option>Name 2</option>
                        <option>Name 3</option>
                    </select>
                    <select name="type">
                        <option>All Type</option>
                        <option>Type 1</option>
                        <option>Type 2</option>
                        <option>Type 3</option>
                    </select>
                    <input type="submit" value="FILTER" class="btn green-back">
                    <a href="#" class="btn blue-back">ADD</a>
                    <a href="#" class="btn red-back">ARCHIVE</a>
                </form>
            </div>
        </div>
        <div class="process-blocks">
            <div class="process gray-border">
                <a href="#">
                    <div class="type-process">
                        <div class="is-new-block active"></div>
                        <div class="text">Type of process Type of process</div>
                    </div>
                    <div class="name">Name of process Name of process</div>
                    <div class="desc">Description of process Description of process</div>
                    <div class="stage">Name of stage Name of stage</div>
                </a>
                <div class="type-message gray-back">
                    <button class="btn-clear accept"><i class="fas fa-check-circle"></i>
                    </button>
                    <button class="btn-clear ignore"><i class="fas fa-times-circle"></i></button>
                    <div class="text">NORMAL</div>
                </div>
            </div>
            <div class="process orange-border">
                <a href="#">
                    <div class="type-process">
                        <div class="is-new-block active"></div>
                        <div class="text">Type of process</div>
                    </div>
                    <div class="name">Name of process</div>
                    <div class="desc">Description of process</div>
                    <div class="stage">Name of stage</div>
                </a>
                <div class="type-message orange-back">
                    <button class="btn-clear accept"><i class="fas fa-check-circle"></i>
                    </button>
                    <button class="btn-clear ignore"><i class="fas fa-times-circle"></i></button>
                    <div class="text">REQUEST</div>
                </div>
            </div>
            <div class="process red-border">
                <a href="#">
                    <div class="type-process">
                        <div class="is-new-block active"></div>
                        <div class="text">Type of process</div>
                    </div>
                    <div class="name">Name of process</div>
                    <div class="desc">Description of process</div>
                    <div class="stage">Name of stage</div>
                </a>
                <div class="type-message red-back">
                    <button class="btn-clear accept"><i class="fas fa-check-circle"></i>
                    </button>
                    <button class="btn-clear ignore"><i class="fas fa-times-circle"></i></button>
                    <div class="text">URGENT</div>
                </div>
            </div>
            <div class="process green-border">
                <a href="#">
                    <div class="type-process">
                        <div class="is-new-block"></div>
                        <div class="text">Type of process</div>
                    </div>
                    <div class="name">Name of process</div>
                    <div class="desc">Description of process</div>
                    <div class="stage">Name of stage</div>
                </a>
                <div class="type-message green-back">
                    <button class="btn-clear accept"><i class="fas fa-check-circle"></i>
                    </button>
                    <button class="btn-clear ignore"><i class="fas fa-times-circle"></i></button>
                    <div class="text">APPROVAL</div>
                </div>
            </div>
            <div class="process green-border">
                <a href="#">
                    <div class="type-process">
                        <div class="is-new-block"></div>
                        <div class="text">Type of process</div>
                    </div>
                    <div class="name">Name of process</div>
                    <div class="desc">Description of process</div>
                    <div class="stage">Name of stage</div>
                </a>
                <div class="type-message green-back">
                    <button class="btn-clear accept"><i class="fas fa-check-circle"></i>
                    </button>
                    <button class="btn-clear ignore"><i class="fas fa-times-circle"></i></button>
                    <div class="text">APPROVAL</div>
                </div>
            </div>
            <div class="process gray-border">
                <a href="#">
                    <div class="type-process">
                        <div class="is-new-block"></div>
                        <div class="text">Type of process</div>
                    </div>
                    <div class="name">Name of process</div>
                    <div class="desc">Description of process</div>
                    <div class="stage">Name of stage</div>
                </a>
                <div class="type-message gray-back">
                    <button class="btn-clear accept"><i class="fas fa-check-circle"></i>
                    </button>
                    <button class="btn-clear ignore"><i class="fas fa-times-circle"></i></button>
                    <div class="text">NORMAL</div>
                </div>
            </div>
            <div class="process orange-border">
                <a href="#">
                    <div class="type-process">
                        <div class="is-new-block"></div>
                        <div class="text">Type of process</div>
                    </div>
                    <div class="name">Name of process</div>
                    <div class="desc">Description of process</div>
                    <div class="stage">Name of stage</div>
                </a>
                <div class="type-message orange-back">
                    <button class="btn-clear accept"><i class="fas fa-check-circle"></i>
                    </button>
                    <button class="btn-clear ignore"><i class="fas fa-times-circle"></i></button>
                    <div class="text">REQUEST</div>
                </div>
            </div>
            <div class="process red-border">
                <a href="#">
                    <div class="type-process">
                        <div class="is-new-block"></div>
                        <div class="text">Type of process</div>
                    </div>
                    <div class="name">Name of process</div>
                    <div class="desc">Description of process</div>
                    <div class="stage">Name of stage</div>
                </a>
                <div class="type-message red-back">
                    <button class="btn-clear accept"><i class="fas fa-check-circle"></i>
                    </button>
                    <button class="btn-clear ignore"><i class="fas fa-times-circle"></i></button>
                    <div class="text">URGENT</div>
                </div>
            </div>
            <div class="process green-border">
                <a href="#">
                    <div class="type-process">
                        <div class="is-new-block"></div>
                        <div class="text">Type of process</div>
                    </div>
                    <div class="name">Name of process</div>
                    <div class="desc">Description of process</div>
                    <div class="stage">Name of stage</div>
                </a>
                <div class="type-message green-back">
                    <button class="btn-clear accept"><i class="fas fa-check-circle"></i>
                    </button>
                    <button class="btn-clear ignore"><i class="fas fa-times-circle"></i></button>
                    <div class="text">APPROVAL</div>
                </div>
            </div>
            <div class="process green-border">
                <a href="#">
                    <div class="type-process">
                        <div class="is-new-block"></div>
                        <div class="text">Type of process</div>
                    </div>
                    <div class="name">Name of process</div>
                    <div class="desc">Description of process</div>
                    <div class="stage">Name of stage</div>
                </a>
                <div class="type-message green-back">
                    <button class="btn-clear accept"><i class="fas fa-check-circle"></i>
                    </button>
                    <button class="btn-clear ignore"><i class="fas fa-times-circle"></i></button>
                    <div class="text">APPROVAL</div>
                </div>
            </div>
            <div class="process gray-border">
                <a href="#">
                    <div class="type-process">
                        <div class="is-new-block"></div>
                        <div class="text">Type of process</div>
                    </div>
                    <div class="name">Name of process</div>
                    <div class="desc">Description of process</div>
                    <div class="stage">Name of stage</div>
                </a>
                <div class="type-message gray-back">
                    <button class="btn-clear accept"><i class="fas fa-check-circle"></i>
                    </button>
                    <button class="btn-clear ignore"><i class="fas fa-times-circle"></i></button>
                    <div class="text">NORMAL</div>
                </div>
            </div>
            <div class="process orange-border">
                <a href="#">
                    <div class="type-process">
                        <div class="is-new-block"></div>
                        <div class="text">Type of process</div>
                    </div>
                    <div class="name">Name of process</div>
                    <div class="desc">Description of process</div>
                    <div class="stage">Name of stage</div>
                </a>
                <div class="type-message orange-back">
                    <button class="btn-clear accept"><i class="fas fa-check-circle"></i>
                    </button>
                    <button class="btn-clear ignore"><i class="fas fa-times-circle"></i></button>
                    <div class="text">REQUEST</div>
                </div>
            </div>
            <div class="process red-border">
                <a href="#">
                    <div class="type-process">
                        <div class="is-new-block"></div>
                        <div class="text">Type of process</div>
                    </div>
                    <div class="name">Name of process</div>
                    <div class="desc">Description of process</div>
                    <div class="stage">Name of stage</div>
                </a>
                <div class="type-message red-back">
                    <button class="btn-clear accept"><i class="fas fa-check-circle"></i>
                    </button>
                    <button class="btn-clear ignore"><i class="fas fa-times-circle"></i></button>
                    <div class="text">URGENT</div>
                </div>
            </div>
            <div class="process green-border">
                <a href="#">
                    <div class="type-process">
                        <div class="is-new-block"></div>
                        <div class="text">Type of process</div>
                    </div>
                    <div class="name">Name of process</div>
                    <div class="desc">Description of process</div>
                    <div class="stage">Name of stage</div>
                </a>
                <div class="type-message green-back">
                    <button class="btn-clear accept"><i class="fas fa-check-circle"></i>
                    </button>
                    <button class="btn-clear ignore"><i class="fas fa-times-circle"></i></button>
                    <div class="text">APPROVAL</div>
                </div>
            </div>
            <div class="process green-border">
                <a href="#">
                    <div class="type-process">
                        <div class="is-new-block"></div>
                        <div class="text">Type of process</div>
                    </div>
                    <div class="name">Name of process</div>
                    <div class="desc">Description of process</div>
                    <div class="stage">Name of stage</div>
                </a>
                <div class="type-message green-back">
                    <button class="btn-clear accept"><i class="fas fa-check-circle"></i>
                    </button>
                    <button class="btn-clear ignore"><i class="fas fa-times-circle"></i></button>
                    <div class="text">APPROVAL</div>
                </div>
            </div>

        </div>
    </div>
    <div class="footer">
        <div class="text">
            Copyright &#169; 2014-2018. ATOM. All rights reserved.
        </div>
    </div>

</body>

</html>