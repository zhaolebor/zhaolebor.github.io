---
title: Footstep Planning and Control for Bipedal Robots using Reinforcement Learning
summary: Teach a humanoid robot how to climb stairs
tags:
  - Computer Vision
  - Robotics
  - Machine Learning
  - Python
date: '2023-12-31T00:00:00Z'

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
  url: https://drive.google.com/file/d/1rxUbYblup1BYVozxbY8tetNEDJQGGNFO/view?usp=sharing
- name: Poster
  url: https://drive.google.com/file/d/1PssJmK9uXXfkXkwh2Vr-JmjJSbgLciHy/view?usp=sharing
url_code: 'https://github.com/zhaolebor/LearningHumanoidWalking'
url_pdf: ''
url_slides: ''
url_video: ''

# Slides (optional).
#   Associate this project with Markdown slides.
#   Simply enter your slide deck's filename without extension.
#   E.g. `slides = "example-slides"` references `content/slides/example-slides.md`.
#   Otherwise, set `slides = ""`.
slides: ''
---

In this project, we aim to create humanoid robot movements
in a 3D space that includes both flat areas and stairs of varying
heights. To do this effectively, we need to carefully plan
both the steps the robot will take and its overall body move-
ment. We’ve decided to handle these two aspects—footstep
sequencing and full-body motion—separately. This separation
allows for more precise control over the movement’s quality.
The effectiveness of the footstep plan can be measured using
various criteria, like the number of steps or other performance
metrics. The quality of the movement, on the other hand, is
primarily judged by its ability to meet all necessary constraints
to prevent falls and maintain stability. Separating the planning
and control processes also simplifies fine-tuning, as it narrows
down the range of influence for each parameter.
We propose a hierarchical control scheme with dynamic
and static step planners and a Reinforcement Learning (RL)
based controller. In this report we will present the planning
and control methods used in our system, a comparison of
the different path planning algorithms we used, our bipedal
robot JVRC-1 achieving respectable performance traversing
both flat surfaces and stairs in MuJoCo simulation, as well as
unsuccessful attempts and future work.

![screen reader text](stairclimbing.png "The robot successfully climb the stairs using the RL based controller on planned footsteps.")


