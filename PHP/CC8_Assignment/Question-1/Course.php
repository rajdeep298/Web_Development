<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Course Info</title>
        <link rel="stylesheet" href="course.css">
    </head>
    <body>
        <?php
        include "Connect.php";
        global$data;
        ?>
        <header id="header">
            <div id="head_div">
                <h1>Kolkata College</h1>
                <ul>
                    <li><button><a href="index.html" >Home</a></button></li>
                    <li><button><a href="Admissions.html">Admissions</a></button></li>
                    <li><button><a href="Gallery.html">Gallery</a></button></li>
                </ul>
            </div>
            <div id="description" >
                <h1 id="sub_name">Welcome to the Department of <?php echo $data[$_GET["index"]]['title']?></h1>
                <button><a href="#mid">Explore More</a></button>
            </div>
        </header>
        <div id="body">
            <section id="mid">
                <div>
                    <h2>Welcome to the <?php echo $data[$_GET["index"]]['title']?> Department!</h2>
                    <p>Our <?php echo $data[$_GET["index"]]['title']?> Department is dedicated to providing a comprehensive and enriching educational experience in the fascinating field of <?php echo $data[$_GET["index"]]['title']?>. With a team of highly accomplished faculty members, state-of-the-art facilities, and a vibrant academic community, we strive to nurture intellectual curiosity and develop critical thinking skills among our students.</p>
                    <p><h3>Department Overview:</h3>
                    Our department is committed to excellence in both teaching and research. We offer a wide range of programs
                    and courses designed to equip students with a strong foundation in fundamental physics principles,
                    problem-solving abilities, and hands-on laboratory skills. Whether you are pursuing an undergraduate or
                    graduate degree, our programs will empower you to explore the intricacies of the universe and prepare you
                    for various career paths.
                    <p><h3>Faculty and Staff:</h3>
                    Our distinguished faculty members are passionate educators and accomplished researchers in various fields of physics. They bring a wealth of knowledge and expertise to the classroom, ensuring an engaging and dynamic learning environment. Our supporting staff members are dedicated to providing administrative support and assisting students with their academic journey.
                    <ul id ="tl"><h4>Teachers will be teaching you:</h4>
                        <li><?php echo $data[$_GET["index"]]['teachers'][0]?></li>
                        <li><?php echo $data[$_GET["index"]]['teachers'][1]?></li>
                        <li><?php echo $data[$_GET["index"]]['teachers'][2]?></li>
                    </ul>
                    </p>
                    <p><h3>Academic Programs:</h3>
                    We offer a diverse range of academic programs tailored to meet the needs and interests of students at different levels. Our undergraduate program provides a comprehensive understanding of physics principles and applications, while our graduate program offers opportunities for advanced study and research. Additionally, we offer interdisciplinary programs that combine physics with other disciplines, allowing students to explore new frontiers.</p>
                    <p><h3>Research and Facilities:</h3>
                    The Physics Department boasts cutting-edge research facilities that enable groundbreaking discoveries and innovations. Our faculty and students are actively engaged in research across various fields, including quantum mechanics, astrophysics, condensed matter physics, and particle physics. Our state-of-the-art laboratories provide hands-on experience and opportunities to collaborate on groundbreaking projects.</p>
                    <p><h3>Student Resources:</h3>
                    We are committed to supporting our students' academic success and personal growth. Our department offers comprehensive resources such as academic advising, mentorship programs, research opportunities, and scholarships. We also provide career guidance and networking opportunities to help students explore diverse career paths in academia, industry, and beyond.</p>
                    <p><h3>Events and Seminars:</h3>
                    Throughout the academic year, we organize a series of events, seminars, and guest lectures featuring renowned scientists, scholars, and industry professionals. These events provide opportunities to delve into exciting research topics, broaden knowledge, and connect with experts in the field.</p>
                    <p><h3>News and Achievements:</h3>
                    Our department takes pride in the accomplishments of our faculty and students. We regularly share news about research breakthroughs, publications, awards, and accolades. These achievements highlight our commitment to excellence and showcase the impact our community has on the field of physics.</p>
                    <p><h3>Alumni:</h3>
                    Our alumni have achieved remarkable success in diverse fields, including academia, research institutions, technology companies, and more. We take pride in their accomplishments and provide a platform for networking, mentorship, and professional development, benefiting both current students and recent graduates.

                    We invite you to explore our website to learn more about the Physics Department at [College Name]. Should you have any questions or require further information, please do not hesitate to contact us. We look forward to welcoming you to our vibrant academic community.</p>
                </div>
            </section>
            <button id="btn1"><a href="Academics.html">Back to Academics</a></button>
            <br>
        </div>
        <footer >
            <div id="foot">
                <div>
                    <ul><h3>Contact:</h3>
                        <li>**********</li>
                        <li>**********</li>
                        <li>**********</li>
                    </ul>
                </div>
                <div><h3>Email:</h3>********@email.com</div>
                <div><h3>Address:</h3>**/**,******* Road,*****,Kolkata-******</div>
            </div>
            <div><h3>© 2019 All Rights Reserved | Powered by RK Technologies</h3></div>
        </footer>
    </body>
</html>
