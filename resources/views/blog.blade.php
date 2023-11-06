<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      body {
        background-color: white;
        padding: 0;
        margin: 0;
        font-family: system-ui;
      }
      header {
        font-family: system-ui;
        padding: 20px;
        background: linear-gradient(
          90deg,
          rgb(202, 251, 255) 0%,
          rgb(15, 95, 255) 50%,
          rgb(0, 196, 251) 100%
        );
      }
      .head-wrap {
        display: flex;
        margin: 0 auto;
        max-width: 900px;
      }
      .holder-photo {
        flex: 1;
        text-align: center;
      }
      .holder-profile {
        margin-top: 20px;
        color: white;
        flex: 2;
      }
      .img-prof {
        border: 10px solid white;
        border-radius: 100%;
        box-shadow: 26px 28px 91px -51px rgba(255, 255, 255, 0.75);
        transition: all;
        transition-duration: 0.5s;
      }
      .img-prof:hover {
        transform: scale(1.1);
        box-shadow: none;
      }

      .name-profile {
        font-size: 48px;
        font-weight: 600;
      }

      .title-profile {
        font-size: 30px;
      }

      .button-header {
        margin-top: 10px;
      }
      .button-header button {
        margin-right: 10px;
        font-size: 20px;
        font-weight: bold;
        border-radius: 20px;
        border: none;
        padding: 10px;
        transition: 0.5s;
      }
      .button-header button:hover {
        transform: scale(1.1);
        box-shadow: none;
      }
      .button-download {
        background-color: white;
      }
      .button-hire {
        background-color: rgb(6, 255, 6);
        color: white;
      }

      .footer-wrap {
        text-align: center;
        background-color: rgb(27, 57, 75);
        font-size: 25px;
        max-width: 100vmax;
        color: white;
        padding: 30px;
      }
      .content-wrap {
        max-width: 900px;
        margin: 0 auto;
      }
      .sub-content {
        font-size: 20px;
        font-weight: 500;
      }
      .skillbar {
        display: block;
        margin: 10px 0;
      }
      .barskill {
        background-color: rgb(167, 167, 167);
        height: 20px;
        width: 100%;
        transition: all;
        transition: 1s;
        border-radius: 20px;
        position: relative;
      }
      .barFilling {
        width: 100%;
        height: 20px;
        border-radius: 20px;
        position: absolute;
        transition: all;
        transition: 1s;
      }
      .htmlbar {
        width: 80%;
        background-color: rgb(255, 109, 61);
      }
      .cssbar {
        width: 75%;
        background-color: rgb(6, 129, 251);
      }
      .jsbar {
        width: 90%;
        background-color: rgb(250, 242, 21);
      }
      .edu-list {
        font-size: 20px;
      }
      .edu-wrap {
        display: flex;
      }
      .sub-edu {
        font-size: 16px;
        font-weight: 450;
        padding: 0;
      }
      .edu-name {
        font-weight: 500;
        flex: 1;
      }
      .edu-year {
        font-size: 16px;
        font-style: italic;
        font-weight: 400;
        text-align: left;
      }
      .workex-list {
        margin: 0;
        font-size: 20px;
      }
      .workex-title {
        font-size: 20px;
        font-weight: 500;
        margin: 2px;
      }
      .company-name {
        color: rgb(0, 139, 151);
      }
      .workex-desc {
        font-size: 18px;
        font-weight: 450;
        padding: 0;
        margin-top: 0;
      }
    </style>
  </head>
  <header>
    <div class="head-wrap">
      <div class="holder-photo">
        <img class="img-prof" src="{{ asset('oranh.jpeg') }}" width="200px" height="200px" />
      </div>

      <div class="holder-profile">
        <div class="name-profile">Ligma Sussy Baka</div>
        <div class="title-profile">UI/UX Designer and Front-End Developer</div>
        <div class="button-header">
          <button class="button-download">Download CV</button>
          <button class="button-hire">Hire Me!</button>
        </div>
      </div>
    </div>
  </header>
  <body>
    <div class="content-wrap">
      <h1>About Me</h1>
      <div class="sub-content">
        Hello! I’m Ligma Sussy Baka. I am passionate about UI/UX design and Web
        Design. I am a skilled Front-end Developer and master of Graphic Design
        tools such as Photoshop and Sketch.
      </div>

      <h1>Education</h1>
      <div class="edu-list">
        <ul>
          <li>
            <div class="edu-wrap">
              <div class="edu-name">Institut Teknologi Sebelas Maret</div>
              <div class="edu-year">2010-2014</div>
            </div>
            <div class="sub-edu">
              Bachelor’s Degree, Majoring Business Management
            </div>
          </li>
          <br />
          <li>
            <div class="edu-wrap">
              <div class="edu-name">Ohio National University</div>
              <div class="edu-year">2022-present</div>
            </div>
            <div class="sub-edu">
              Master’s Degree, Majoring Digital Marketing
            </div>
          </li>
        </ul>
      </div>
      <h1>Professional Skill</h1>
      <div class="skillbar">
        <h2>HTML</h2>
        <div class="barskill">
          <div class="barFilling htmlbar"></div>
        </div>
        <h2>CSS</h2>
        <div class="barskill">
          <div class="barFilling cssbar"></div>
        </div>
        <h2>JavaScript</h2>
        <div class="barskill">
          <div class="barFilling jsbar"></div>
        </div>
      </div>

      <h1>Work Experience</h1>
      <div class="workex-list">
        <ul>
          <li>
            <div class="workex-title">
              Senior Front-End Developer at
              <span class="company-name">GladiCorp Indonesia</span>
            </div>
            <div class="workex-desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Repellendus officiis laboriosam ut omnis fugiat corrupti at
              magnam? Optio odit placeat quam excepturi omnis. Quas laborum ea
              ipsum distinctio sit rerum.
            </div>
          </li>
          <br />
          <li>
            <div class="workex-title">
              UI/UX Designer at
              <span class="company-name">PT Mencari Cinta Sejati</span>
            </div>
            <div class="workex-desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Repellendus officiis laboriosam ut omnis fugiat corrupti at
              magnam? Optio odit placeat quam excepturi omnis. Quas laborum ea
              ipsum distinctio sit rerum.
            </div>
          </li>
          <br />
          <li>
            <div class="workex-title">
              Front-End Developer at
              <span class="company-name">Berang Company</span>
            </div>
            <div class="workex-desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Repellendus officiis laboriosam ut omnis fugiat corrupti at
              magnam? Optio odit placeat quam excepturi omnis. Quas laborum ea
              ipsum distinctio sit rerum.
            </div>
          </li>
          <br />
          <li>
            <div class="workex-title">
              Freelance Graphic Designer at
              <span class="company-name">Fiverr</span>
            </div>
            <div class="workex-desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Repellendus officiis laboriosam ut omnis fugiat corrupti at
              magnam? Optio odit placeat quam excepturi omnis. Quas laborum ea
              ipsum distinctio sit rerum.
            </div>
          </li>
        </ul>
      </div>
    </div>
  </body>

  <footer>
    <div class="footer-wrap">&copy;2023 Ligma Sussy Baka</div>
  </footer>
</html>
