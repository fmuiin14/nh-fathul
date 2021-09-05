# Setup Fullstack Developer Test PHP Dev Environment with Docker
Hello, my name is Fathul Muiin. This is my Docker setup for running php development. Thank you :)

**How to run:**

1.  Clone this project nh-fathul
2.  Open your terminal in this folder (make sure your Docker is running)
3.  run ```docker build -t nh-fathul .```
   
   (This command will make an image name nh-fathul)
   
4.  run ```docker-compose up -d```

    (You can go to localhost with URL http://localhost:8004/ and PHPMyAdmin http://localhost:5050/)

5.  run ```docker exec -it nh-fathul_php_1 bash``` to enter Container console

For PHPMyAdmin (username: root, password: password), and http://localhost:8004 for PHP installation.

We will see new folder name "development". 
Please move/ copy:
1. file index.php
2. file data.json
3. folder assets

And you can see my result of mockup slicing for niagahoster. Nb: Honestly, this is my first time to learn Docker. I'm trying my best. I think, development using docker on windows is a little difficult. But I try to always eagerness to learn. Thank you.