---
title: Open Source Autonomous Driving GoKart
summary: We built and raced a self-driving GoKart.
tags:
  - Robotics
  - Machine Learning
  - Computer Vision
  - Software Engineering
date: '2024-05-31T00:00:00Z'

# Optional external URL for project (replaces project detail page).
external_link: ''

image:
  # caption: Photo by rawpixel on Unsplash
  # focal_point: Smart

links:
- name: Gokart Website
  url: https://go-kart-upenn.readthedocs.io/en/latest/tutorial.html
url_code: 'https://github.com/mlab-upenn/gokart-autoware.universe'
url_pdf: ''
url_slides: ''
url_video: 'https://drive.google.com/file/d/1dpN6ens8C1v3MIAGRtYlPcxoIUccVQs8/view?usp=sharing'

# Slides (optional).
#   Associate this project with Markdown slides.
#   Simply enter your slide deck's filename without extension.
#   E.g. `slides = "example-slides"` references `content/slides/example-slides.md`.
#   Otherwise, set `slides = ""`.
slides: ''
---
In collaboration with UPenn ESE Professor Rahul Mangharam, his lab xLab, and the global Autoware Foundation, my team and I designed, built, and actuated an autonomous electric GoKart. Starting with the standard manually-driven design from TopKart, we then took everything apart and strapped it up with autonomy features, including sensors, drivers, motors, microcontrollers, and much more. After rigorous unit testing  and autonomy testing, we rented a minivan, and packaged the entire product on an 11 hour journey to Purdue University in Indiana, where we competed in the 2024 AKS Grad Prix against 5 other universities.

We raced in two challenges, including: (1) the Open Challenge where we fused vision, IMU data and GNSS localization using the FixPosition Vision-RTK2 sensor to guide pure pursuit path following of pre-determined waypoints,  and (2) the Reactive Challenge where we fused live sensory data from a camera and Ouster LiDAR to identify and follow-the-gap between orange cone-marked lanes and avoid obstacles. We won both challenges, with a record-breaking time of 5:48 (~1:09 per lap) to complete five laps, each of approximately 400 meter and 5 turns.

A central engineering priority throughout this project has been reproducibility. As such, we’ve made sure to document everything in GitHub, from successes to failures, from CAD files to PCB designs, from lower-level embedded to higher-level planning controls code, from one iteration to the next, from engineering decisions to empirical evidence. We build this GoKart not just to play around with, but to provide a research platform for various academic and corporate organizations with software that requires testing. Whereas small handheld (~1/10 scale) toy cars are cheap and affordable, and full-sized cars are ultimately most practical, our GoKart achieves the best of both worlds.


![screen reader text](IMG_6491.JPG "The team and the GoKart after winning both the open and reactive categories")
