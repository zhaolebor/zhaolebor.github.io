---
title: Autonomous Block Stacking with Franka Emika Panda Arm Robot
summary: Within a time limit, stack as many static and dynamic blocks as possible.
tags:
  - Computer Vision
  - Robotics
  - ROS
  - Python
date: '2022-12-31T00:00:00Z'

# Optional external URL for project (replaces project detail page).
external_link: ''

image:
  # caption: Photo by rawpixel on Unsplash
  # focal_point: Smart

# links:
#   - icon: twitter
#     icon_pack: fab
#     name: Follow
#     url: https://twitter.com/georgecushen
links:
- name: Report
  url: https://drive.google.com/file/d/1tlF9Ahe7-NA2xrA2SijolBFx86cCoJTy/view?usp=sharing
url_code: 'https://github.com/zhaolebor/MEAM5200-final-project'
url_pdf: ''
url_slides: 'https://docs.google.com/presentation/d/1fPJWhFwsAl-aTx7Db-deHP18ploWAS1nkb_QIq3bPYI/edit?usp=sharing'
url_video: 'https://www.youtube.com/watch?v=9rdkcOWgo7c'

# Slides (optional).
#   Associate this project with Markdown slides.
#   Simply enter your slide deck's filename without extension.
#   E.g. `slides = "example-slides"` references `content/slides/example-slides.md`.
#   Otherwise, set `slides = ""`.
slides: ''
---

The objective is to use a Franka Emika Panda Arm to pick up static and dynamic blocks (on a spinning turntable), and stack them in a given goal area. For static blocks, we defined waypoints for the end effector and used IK (inverse kinematics) to generate the motion plan. For dynamic blocks, we predict the trajectory of the block and calculate a "pick point" where the end effector should pick up the block.

The detection was implemented by the teaching team using OpenCV and AprilTags. The algorithms were implemented in ROS and Python. Simulations were done in the Gazebo environment.

We won 3rd place in the MEAM 5200 Fall Pick and Place Challenge. [Full Competition Video](https://www.youtube.com/watch?v=oD3afyBBPv8)
