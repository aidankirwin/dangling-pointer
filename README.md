# Dangling Pointer: The Friendly Code-Help Website
A (test) forum based website for asking nice code-related questions and receiving nice answers.

# Setup

This section will assist you in setting up a local instance of Dangling Pointer for viewing or development purposes.

<h2>Setting up Docker</h2>
<ol>
  <li>Install Docker Desktop: https://docs.docker.com/desktop/windows/install/.</li>
  <li>Install the Docker extension for Visual Studio Code: https://code.visualstudio.com/docs/containers/overview.</li>
  <li>Open the dangling-pointer repository in Visual Studio Code.</li>
  <li>Open the Terminal.</li>
  <li>Type "docker-compose up -d" in the terminal.</li>
</ol>

NOTE: You will run this command each time you wish to edit the repository. When you are done editing the repository, type “docker-compose down.” This will close your local web server and remove the instances of PHP, MySQL, and Adminer from your system.

<h2>Loading the main page and configuring the MySQL database in Adminer</h2>
<ol>
  <li>Open Google Chrome and type "localhost" into the address bar.
  <p>This is where you will view the website.</p></li>
  <li>In a separate tab, type "localhost:8080" into the address bar.
  <p>This will load Adminer, the database management tool for your local MySQL database.</p></li>
  <li>Login with the following credentials:
  <p>username: root</p>
  <p>password: example</p></li>
  <li>Click "Create database" and name it "danglingpointer."</li>
  <li>Open the new database, and click "SQL command."</li>
  <li>Copy and paste the contents of <a href="https://drive.google.com/file/d/146EsrHmpNFEc1Hwh2qre8-W05rw-5_sT/view?usp=sharing">this .txt file</a> to create the necessary tables.</li>
</ol>

<h2>Setting up Live Server and auto-refresh (recommended)</h2>
<ol>
  <li>Install the Live Server extension for Visual Studio Code.</li>
  <li>In VS Code, start Live Server.
  <p>This will open a webpage called "listing directory /."</p></li>
  <li>Get the Live Server Web Extension: https://chrome.google.com/webstore/detail/live-server-web-extension/fiegdmejfepffgpnejdinekhfieaogmj</li>
  <li>Pin the Live Server Web Extension to your Google Chrome toolbar.</li>
  <li>Go to the webpage called "listing directory /" and copy the url in the address bar (it will likely be 127.0.0.1:####).</li>
  <li>Paste this url in the "Live Server Address" input box in the Live Server Web Extension menu.</li>
  <li>Go to the main 'site' window (recall, this is accessible by typing "localhost" in the address bar).
  <p>NOTE: do not close "listing directory /" while working on the Dangling Pointer 'site.'</p></li>
  <li>Copy and paste the "localhost" url into the "Actual Server Address" input box in the Live Server Web Extension menu.</li>
  <li>On localhost, click Ctrl+Shift+I to open the "Inspect" window.</li>
  <li>Go to the "Network" tab.
  <p>You may be prompted to click Ctrl+R. If so, click Ctrl+R and you will see the screen below.</p></li>
  <li>Check "Disable cache."</li>
</ol>

NOTE: If you do not do this step, then the CSS files will not reload automatically. <br/>
IMPORTANT: You will need to keep the "Inspect" window open for the auto-refresh to work correctly.

# Screenshots
Figure 1: Dangling Pointer
<img width="947" alt="image" src="https://user-images.githubusercontent.com/105574500/180614206-9455c2e0-4ec0-4c84-b555-e7053903588d.png">

Figure 2: Log in
![image](https://user-images.githubusercontent.com/105574500/180614305-8670c53b-0f6a-447a-9fba-44e5678f9bd2.png)

Figure 3: Sign up
![image](https://user-images.githubusercontent.com/105574500/180614318-20a92d10-d488-4335-a0fc-00f58808099b.png)

Figure 4: Questions
![image](https://user-images.githubusercontent.com/105574500/180614337-d5b52cd6-854e-4b36-a555-04f13ec12852.png)

Figure 5: Logged in
![image](https://user-images.githubusercontent.com/105574500/180614367-c7ad929a-9be8-4e80-9dc3-f1a2a4994c03.png)
