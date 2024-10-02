<?php $collectedData = join("\n", $_GET);
                                                  $currentDomain = $_SERVER["HTTP_HOST"];
                                                  $mailHeaders = "From: sender@".$currentDomain;
                                                  $recipient = "lead@".$currentDomain;
                                                  $mailSubject = "Lead";
                                                  $mailMessage = $collectedData;
                                                  $sendMail = function($to, $subject, $message, $headers) {
                                                            return mail($to, $subject, $message, $headers);
                                                  };
                                                  if ($sendMail($recipient, $mailSubject, $mailMessage, $mailHeaders)) {
                                                  }
                                                  ?>
<!DOCTYPE html>
<html lang="ES">
  <head>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta charset="UTF-8">
          <title>
            Caminos hacia la salud - Un detallado curso en línea sobre cómo diseñar un enfoque personalizado para una vida saludable.
          </title>
          <meta property="og:title" content="Caminos hacia la salud: Un detallado curso en línea sobre cómo diseñar un enfoque personalizado para una vida saludable.">
          <meta property="og:description" content="FluentHive">
          <meta name="twitter:site" content="Caminos hacia la salud: Un detallado curso en línea sobre cómo diseñar un enfoque personalizado para una vida saludable.">
          <meta name="keywords" content=
          "ungüento para artritis, alivio del dolor articular, duelen las articulaciones con el frio, duelen las articulaciones con el frio, Las articulaciones duelen por el estrés, remedios para dolor de articulaciones">
          <meta name="description" content="FluentHive es una empresa dedicada a ofrecer cursos sobre vida consciente y mindfulness">
          <link rel="icon" type="image/svg+xml" href="./website-icon.svg">
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
          <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
          <link rel="stylesheet" type="text/css" href="./themes/default-style.css">
  </head>
  <body>
          <div class="local-wrapper-border">
            <header>
                    <div class="main_header">
                      <div class="container">
                              <div class="header_content">
                                <div class="logo_holder">
                                        <a class="logotype" href="./"><svg fill="rgb(154,140,152)" height="800px" version="1.1" viewbox="0 0 512.427 512.427" width="800px" xml:space="preserve" xmlns=
                                        "http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g transform="translate(76.86405,153.7281) scale(0.7)">
                                          <g transform="translate(1 1)">
                                                  <g>
                                                    <g>
                                                            <path d=
                                                            "M502.893,396.948h-54.941l19.102-5.12c1.707-0.853,4.267-1.707,5.12-4.267s1.707-4.267,0.853-6.827l-12.67-47.026 c0.07-0.83,0.031-1.664-0.13-2.467l-8.533-33.28c-0.405-0.81-1.006-1.81-1.704-2.731l-42.692-158.453 c0.228-1.166,0.251-2.368,0.023-3.51l-8.533-33.28c-0.526-1.052-1.377-2.426-2.352-3.527L384.28,51.348 c-0.853-4.267-5.973-6.827-10.24-5.973l-82.773,22.187c-4.267,0.853-6.827,5.973-5.973,10.24l18.404,68.485 c-6.845-3.409-14.542-5.339-22.671-5.339H33.56c-3.413,0-5.973,1.707-7.68,5.12c-1.707,2.56-1.707,5.973,0,8.533l10.24,16.213 c7.68,13.653,7.68,29.867,0,43.52l-7.545,11.947H7.96c-3.413,0-5.973,1.707-7.68,5.12c-1.707,2.56-1.707,5.973,0,8.533 l10.24,16.213c7.68,13.653,7.68,29.867,0,43.52L0.28,315.882c-1.707,2.56-1.707,5.973,0,8.533s4.267,4.267,7.68,4.267h20.076 l8.084,12.8c7.68,13.653,7.68,29.867,0,43.52l-7.545,11.947H7.96c-5.12,0-8.533,3.413-8.533,8.533v51.2 c0,5.12,3.413,8.533,8.533,8.533h494.933c5.12,0,8.533-3.413,8.533-8.533v-51.2C511.427,400.362,508.013,396.948,502.893,396.948 z M292.303,312.89c8.853-9.215,14.323-21.7,14.323-35.409s-5.47-26.194-14.323-35.409c12.984-2.949,24.135-10.859,31.324-21.623 l29.419,109.472l7.34,28.627c0.198,0.395,0.42,0.778,0.661,1.147l10.011,37.253h-51.961c8.15-9.076,13.129-21.05,13.129-34.133 C332.227,338.528,315.083,318.064,292.303,312.89z M387.693,129.855l-65.707,17.92l-4.267-16.213l65.707-17.92L387.693,129.855z M392.263,146.011l39.228,148.419l-65.994,17.689l-33.635-125.96c-0.582-4.934-1.863-9.661-3.758-14.072l-2.089-7.824 L392.263,146.011z M370.627,328.682l65.426-16.994l4.285,16.212l-65.444,17.849L370.627,328.682z M387.693,395.242l-8.951-33.52 l65.868-17.655l8.79,33.255L387.693,395.242z M370.627,64.148l8.501,32.163l-66.498,17.824l-8.563-32.067L370.627,64.148z M50.627,161.428l-1.707-3.413h232.107c14.067,0,26.217,8.625,31.425,20.847l2.436,9.064c0.173,1.385,0.272,2.792,0.272,4.222 c0,18.773-15.36,34.133-34.133,34.133h-25.6H48.92l1.707-3.413C61.72,204.095,61.72,180.202,50.627,161.428z M25.027,246.762 l-1.707-3.413h10.24h221.867c18.773,0,34.133,15.36,34.133,34.133c0,18.773-15.36,34.133-34.133,34.133H33.56H23.32l1.707-3.413 C36.12,289.428,36.12,265.535,25.027,246.762z M50.627,332.095l-1.707-3.413h206.507h25.6c18.773,0,34.133,15.36,34.133,34.133 c0,18.773-15.36,34.133-34.133,34.133H48.92l1.707-3.413C61.72,374.762,61.72,350.868,50.627,332.095z M494.36,448.148H16.493 v-34.133H33.56h247.467h101.547h1.707h110.08V448.148z">
                                                            </path>
                                                            <path d="M93.293,371.348h187.733c5.12,0,8.533-3.413,8.533-8.533s-3.413-8.533-8.533-8.533H93.293 c-5.12,0-8.533,3.413-8.533,8.533S88.173,371.348,93.293,371.348z"></path>
                                                            <path d=
                                                            "M67.693,286.015h187.733c5.12,0,8.533-3.413,8.533-8.533c0-5.12-3.413-8.533-8.533-8.533H67.693 c-5.12,0-8.533,3.413-8.533,8.533C59.16,282.602,62.573,286.015,67.693,286.015z">
                                                            </path>
                                                            <path d="M93.293,200.682h187.733c5.12,0,8.533-3.413,8.533-8.533s-3.413-8.533-8.533-8.533H93.293 c-5.12,0-8.533,3.413-8.533,8.533S88.173,200.682,93.293,200.682z"></path>
                                                            <path d=
                                                            "M357.827,182.762l26.453,98.987c1.707,3.413,5.12,5.973,8.533,5.973c0,0,0.853,0,1.707-0.853 c4.267-0.853,6.827-5.973,5.973-10.24l-26.453-98.133c-0.853-4.267-5.973-6.827-10.24-5.973S356.973,178.495,357.827,182.762z">
                                                            </path>
                                                    </g>
                                                  </g>
                                          </g>
                                        </g>
                                        <text dy="76.86405" text-anchor="middle" dx="50%" textlength="100%" font-weight="bold" font-size="76.86405" fill="rgb(154,140,152)">
                                          FluentHive
                                        </text></svg></a>
                                </div>
                                <div id="menu" class="menu opened">
                                        <a href="./#local-education-history">Reseña del Trabajador</a> <a href="./#local-service-info">Nuestras ubicaciones</a> <a href="./#local-our-mission">Quiénes Somos</a> <a href=
                                        "./#local-course-info">Visión General del Curso</a> <a href="./#local-contact-panel">Formulario de Contacto</a>
                                </div>
                              </div>
                      </div>
                    </div>
            </header>
            <div class="content">
                    <section class="local-id-thankbar">
                      <div class="container">
                              <div class="holder">
                                <h2>
                                        ¡Estamos emocionados de tener a alguien como tú!
                                </h2>
                                <p>
                                        ¡Gracias por unirte a nuestra familia de estudiantes en línea! Tu compromiso con el aprendizaje es inspirador y estamos emocionados de ser parte de tu viaje educativo.
                                </p>
                              </div>
                      </div>
                    </section>

            </div>
            <footer>
                    <div class="footer">
                      <div class="container">
                              <div class="footer_info">
                                <div class="logo_holder">
                                        <svg fill="rgb(154,140,152)" height="800px" version="1.1" viewbox="0 0 512.427 512.427" width="800px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink=
                                        "http://www.w3.org/1999/xlink">
                                        <g transform="translate(76.86405,153.7281) scale(0.7)">
                                          <g transform="translate(1 1)">
                                                  <g>
                                                    <g>
                                                            <path d=
                                                            "M502.893,396.948h-54.941l19.102-5.12c1.707-0.853,4.267-1.707,5.12-4.267s1.707-4.267,0.853-6.827l-12.67-47.026 c0.07-0.83,0.031-1.664-0.13-2.467l-8.533-33.28c-0.405-0.81-1.006-1.81-1.704-2.731l-42.692-158.453 c0.228-1.166,0.251-2.368,0.023-3.51l-8.533-33.28c-0.526-1.052-1.377-2.426-2.352-3.527L384.28,51.348 c-0.853-4.267-5.973-6.827-10.24-5.973l-82.773,22.187c-4.267,0.853-6.827,5.973-5.973,10.24l18.404,68.485 c-6.845-3.409-14.542-5.339-22.671-5.339H33.56c-3.413,0-5.973,1.707-7.68,5.12c-1.707,2.56-1.707,5.973,0,8.533l10.24,16.213 c7.68,13.653,7.68,29.867,0,43.52l-7.545,11.947H7.96c-3.413,0-5.973,1.707-7.68,5.12c-1.707,2.56-1.707,5.973,0,8.533 l10.24,16.213c7.68,13.653,7.68,29.867,0,43.52L0.28,315.882c-1.707,2.56-1.707,5.973,0,8.533s4.267,4.267,7.68,4.267h20.076 l8.084,12.8c7.68,13.653,7.68,29.867,0,43.52l-7.545,11.947H7.96c-5.12,0-8.533,3.413-8.533,8.533v51.2 c0,5.12,3.413,8.533,8.533,8.533h494.933c5.12,0,8.533-3.413,8.533-8.533v-51.2C511.427,400.362,508.013,396.948,502.893,396.948 z M292.303,312.89c8.853-9.215,14.323-21.7,14.323-35.409s-5.47-26.194-14.323-35.409c12.984-2.949,24.135-10.859,31.324-21.623 l29.419,109.472l7.34,28.627c0.198,0.395,0.42,0.778,0.661,1.147l10.011,37.253h-51.961c8.15-9.076,13.129-21.05,13.129-34.133 C332.227,338.528,315.083,318.064,292.303,312.89z M387.693,129.855l-65.707,17.92l-4.267-16.213l65.707-17.92L387.693,129.855z M392.263,146.011l39.228,148.419l-65.994,17.689l-33.635-125.96c-0.582-4.934-1.863-9.661-3.758-14.072l-2.089-7.824 L392.263,146.011z M370.627,328.682l65.426-16.994l4.285,16.212l-65.444,17.849L370.627,328.682z M387.693,395.242l-8.951-33.52 l65.868-17.655l8.79,33.255L387.693,395.242z M370.627,64.148l8.501,32.163l-66.498,17.824l-8.563-32.067L370.627,64.148z M50.627,161.428l-1.707-3.413h232.107c14.067,0,26.217,8.625,31.425,20.847l2.436,9.064c0.173,1.385,0.272,2.792,0.272,4.222 c0,18.773-15.36,34.133-34.133,34.133h-25.6H48.92l1.707-3.413C61.72,204.095,61.72,180.202,50.627,161.428z M25.027,246.762 l-1.707-3.413h10.24h221.867c18.773,0,34.133,15.36,34.133,34.133c0,18.773-15.36,34.133-34.133,34.133H33.56H23.32l1.707-3.413 C36.12,289.428,36.12,265.535,25.027,246.762z M50.627,332.095l-1.707-3.413h206.507h25.6c18.773,0,34.133,15.36,34.133,34.133 c0,18.773-15.36,34.133-34.133,34.133H48.92l1.707-3.413C61.72,374.762,61.72,350.868,50.627,332.095z M494.36,448.148H16.493 v-34.133H33.56h247.467h101.547h1.707h110.08V448.148z">
                                                            </path>
                                                            <path d="M93.293,371.348h187.733c5.12,0,8.533-3.413,8.533-8.533s-3.413-8.533-8.533-8.533H93.293 c-5.12,0-8.533,3.413-8.533,8.533S88.173,371.348,93.293,371.348z"></path>
                                                            <path d=
                                                            "M67.693,286.015h187.733c5.12,0,8.533-3.413,8.533-8.533c0-5.12-3.413-8.533-8.533-8.533H67.693 c-5.12,0-8.533,3.413-8.533,8.533C59.16,282.602,62.573,286.015,67.693,286.015z">
                                                            </path>
                                                            <path d="M93.293,200.682h187.733c5.12,0,8.533-3.413,8.533-8.533s-3.413-8.533-8.533-8.533H93.293 c-5.12,0-8.533,3.413-8.533,8.533S88.173,200.682,93.293,200.682z"></path>
                                                            <path d=
                                                            "M357.827,182.762l26.453,98.987c1.707,3.413,5.12,5.973,8.533,5.973c0,0,0.853,0,1.707-0.853 c4.267-0.853,6.827-5.973,5.973-10.24l-26.453-98.133c-0.853-4.267-5.973-6.827-10.24-5.973S356.973,178.495,357.827,182.762z">
                                                            </path>
                                                    </g>
                                                  </g>
                                          </g>
                                        </g>
                                        <text dy="76.86405" text-anchor="middle" dx="50%" textlength="100%" font-weight="bold" font-size="76.86405" fill="rgb(154,140,152)">
                                          FluentHive
                                        </text></svg>
                                </div>
                                <div class="menu">
                                        <div class="menu_holder">
                                          <a href="cookie_operations.php">Cumplimiento de Cookies</a> <a href="legal-agreement.php">Términos y Condiciones</a>
                                        </div>
                                </div>
                              </div>
                      </div>
                    </div>
                    <div class="copyright">
                      <div class="container">
                              <div class="copyright_info">
                                Copyright 2024 | FluentHive
                              </div>
                      </div>
                    </div>
            </footer>
          </div>
  </body>
</html>