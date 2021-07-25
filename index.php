<?php

    require_once('config/conexion.php');

    // SKILLS
    require_once('models/Skill.php');
    $skill = new Skill();
    $dataSkill = $skill->getSkill();

    // EDUCATION
    require_once('models/Education.php');
    $education = new Education();
    $dataEducation = $education->getEducation();

    // EXPERIENCE
    require_once('models/Experience.php');
    $experience = new Experience();
    $dataExperience = $experience->getExperience();

    // EXPERIENCE
    require_once('models/Portfolio.php');
    $portfolio = new Portfolio();
    $dataPortfolio = $portfolio->getPortfolio();

    // SOCIAL
    require_once('models/Social.php');
    $social = new Social();
    $dataSocial = $social->getSocial();

?>

<!DOCTYPE html>
<html lang="es-419">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="public/img/favicon.png" type="image/x-icon">

        <link rel="stylesheet" href="public/css/font-awesome.css">
        <link rel="stylesheet" href="public/css/style.css">

        <title>Angel's Web</title>
    </head>

    <body>
        <!-- Page Loader -->
        <div class="page-loader">
            <div></div>
            <div></div>
            <div></div>
        </div>

        <!-- Background Circles -->
        <div class="bg-circles">
            <div class="circle-1"></div>
            <div class="circle-2"></div>
            <div class="circle-3"></div>
            <div class="circle-4"></div>
        </div>

        <!-- Overlay -->
        <div class="overlay"></div>

        <div class="main hidden">

            <!-- HEADER -->
            <header class="header">
                <div class="container">
                    <div class="row flex-end">
                        <button type="button" class="nav-toggler">
                            <span></span>
                        </button>

                        <nav class="nav">
                            <div class="nav-inner">
                                <ul>
                                    <li><a href="#home" class="nav-item link-item">Inicio</a></li>
                                    <li><a href="#about" class="nav-item link-item">Sobre mi</a></li>
                                    <li><a href="#portfolio" class="nav-item link-item">Portafolio</a></li>
                                    <li><a href="#contact" class="nav-item link-item">Contacto</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>


            <!-- HOME SECTION -->
            <section class="home-section align-items-center" id="home">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="home-text">
                            <p>Bienvenido a Angel's, soy</p>
                            <h1>Miguel Angel</h1>
                            <h2>Desarrollador web.</h2>

                            <a href="#about" class="btn link-item">Mas Sobre Mi</a>
                            <a href="#portfolio" class="btn link-item">Portafolio</a>
                        </div>

                        <div class="home-img">
                            <div class="img-box">
                                <img src="public/img/profile-img.png" alt="profile-img">
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- ABOUT SECTION -->
            <section class="about-section sec-padding" id="about">
                <div class="container">
                    <div class="row">
                        <div class="section-title">
                            <h2>Sobre mi</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="about-img">
                            <div class="img-box">
                                <img src="public/img/about-img.png" alt="about-img">
                            </div>
                        </div>
                        <div class="about-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, facere fugit ea neque porro
                            in vitae mollitia odit voluptas laboriosam error ullam enim nobis dolor at eos, ipsa itaque odio
                            deserunt velit perferendis quia distinctio? Ab animi consectetur, nam doloribus delectus ut alias
                            iure quos! Nostrum aut ex impedit omnis?</p>

                            <h3>Habilidades</h3>
                            <div class="skills">
                                <?php
                                    foreach ($dataSkill as $row)
                                    {
                                        ?>
                                            <div class="skill-item"><?php echo $row['skill_name'] ?></div>
                                        <?php
                                    }
                                ?>
                            </div>

                            <div class="about-tabs">
                                <button type="button" class="tab-item active" data-target="#education">Educación</button>
                                <button type="button" class="tab-item" data-target="#experience">Experiencia</button>
                            </div>

                            <!-- Education -->
                            <div class="tab-content active" id="education">
                                <div class="timeline">
                                    <?php
                                        foreach ($dataEducation as $row)
                                        {
                                            ?>
                                                <div class="timeline-item">
                                                    <span class="date"><?php echo date('Y', strtotime($row['edu_date'])) ?></span>
                                                    <h4><?php echo $row['edu_title'] ?> - <span><?php echo $row['edu_place'] ?></span></h4>
                                                    <p><?php echo $row['edu_desc'] ?></p>
                                                </div>
                                            <?php
                                        }
                                    ?>
                                </div>
                            </div>

                            <!-- Experience -->
                            <div class="tab-content" id="experience">
                                <div class="timeline">
                                    <?php
                                        foreach ($dataExperience as $row)
                                        {
                                            ?>
                                                <div class="timeline-item">
                                                    <span class="date"><?php echo date('Y', strtotime($row['exp_date'])) ?></span>
                                                    <h4><?php echo $row['exp_title'] ?> - <span><?php echo $row['exp_place'] ?></span></h4>
                                                    <p><?php echo $row['exp_desc'] ?></p>
                                                </div>
                                            <?php
                                        }
                                    ?>
                                </div>
                            </div>

                            <!-- Buttons -->
                            <!-- <a href="public/src/cv.pdf" target="_blank" class="btn">Download CV</a> -->
                            <a href="#contact" class="btn link-item">Contactame</a>
                        </div>
                    </div>
                </div>
            </section>


            <!-- PORTFOLIO SECTION -->
            <section class="portfolio-section sec-padding" id="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="section-title">
                            <h2>Trabajos recientes</h2>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Portfolio Item -->
                            <?php
                                foreach ($dataPortfolio as $row)
                                {
                                    ?>
                                        <div class="portfolio-item">
                                            <div class="portfolio-item-thumbnail">
                                                <img src="public/img/portfolio/<?php echo $row['port_img'] ?>" alt="Portfolio item thumb">
                                            </div>
                                            <h3 class="portfolio-item-title"><?php echo $row['port_title'] ?></h3>
                                            <button type="button" class="btn view-project-btn">Ver proyecto</button>
                                            <div class="portfolio-item-details">
                                                <div class="description">
                                                    <p><?php echo $row['port_desc'] ?></p>
                                                </div>
                                                <div class="general-info">
                                                    <ul>
                                                        <li>Creado - <span><?php echo date('m/Y', strtotime($row['port_date'])) ?></span></li>
                                                        <li>Tecnologias usadas -
                                                            <?php
                                                                $dataLanguaje = $portfolio->getPortfolio_Lang($row['port_id']);
                                                                $count = 1;
                                                                foreach ($dataLanguaje as $rowLang)
                                                                {
                                                                    ?>
                                                                        <span>
                                                                            <?php
                                                                                echo $rowLang['lang_name'];
                                                                                if($count < count($dataLanguaje)){
                                                                                    echo ', ';
                                                                                }
                                                                            ?>
                                                                        </span>
                                                                    <?php

                                                                    $count++;
                                                                }
                                                            ?>
                                                        </li>
                                                        <li>Rol - <span><?php echo $row['port_rol'] ?></span></li>
                                                        <li>Ver en Vivo - <span><a href="#" target="_blank"><?php echo $row['port_domain'] ?></a></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                }
                            ?>
                    </div>
                </div>
            </section>


            <!-- CONTACT SECTION -->
            <section class="contact-section sec-padding" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="section-title">
                            <h2>Contactame</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="contact-form">
                            <form method="post" id="contactForm">
                                <div class="row">
                                    <div class="input-group">
                                        <input type="text" placeholder="Nombre" class="input-control" id="cont_name" name="cont_name">
                                    </div>

                                    <div class="input-group">
                                        <input type="email" placeholder="Email" class="input-control" id="cont_email" name="cont_email">
                                    </div>

                                    <div class="input-group">
                                        <input type="text" placeholder="Asunto" class="input-control" id="cont_subject" name="cont_subject">
                                    </div>

                                    <div class="input-group">
                                        <textarea placeholder="Mensaje" class="input-control" id="cont_message" name="cont_message"></textarea>
                                    </div>

                                    <div class="submit-btn">
                                        <button type="submit" class="btn">Enviar mensaje</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="contact-info">
                            <div class="contact-info-item">
                                <h3>Email</h3>
                                <p>example@gmail.com</p>
                            </div>

                            <div class="contact-info-item">
                                <h3>Telefono</h3>
                                <p>312 562****</p>
                            </div>

                            <div class="contact-info-item">
                                <h3>Sigueme</h3>
                                <div class="social-links">
                                    <?php
                                        foreach ($dataSocial as $row)
                                        {
                                            ?>
                                                <a href="<?php echo $row['soc_url'] ?>" target="-blank"><i class="fab <?php echo $row['soc_icon'] ?>"></i></a>
                                            <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <!-- PORTFOLIO POPUP -->
        <div class="portfolio-popup">
            <div class="pp-inner">
                <div class="pp-content">
                    <div class="pp-header">
                        <button type="button" class="btn pp-close"><i class="fas fa-times"></i></button>
                        <div class="pp-thumbnail">
                            <img src="public/img/portfolio/3.jpg" alt="pp-thumbnail">
                        </div>
                        <h3></h3>
                    </div>

                    <div class="pp-body">
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="index.js"></script>
    </body>
</html>