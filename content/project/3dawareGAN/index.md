---
title: Investigating Neural Field Models For 3D-Aware GANs
summary: Can a Gaussian-activated MLP replace the SIREN in pi-GAN?
tags:
  - Machine Learning
  - Computer Vision
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
  url: https://drive.google.com/file/d/1YvW8gQ8td4XUCqlWTEfR4G-v_N7C7pHi/view?usp=sharing
url_code: 'https://github.com/zhaolebor/3d-aware-GAN'
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

3D-aware GANs generate images that are informed by 3D information and so can render these images in
novel view-points with 3D-consistency. pi-GAN is one such model, which attributes its success to its use of SIREN for
providing the 3D information. In this paper we compare using Gaussian activations to sine activations (used in SIREN) or
ReLU activations (broadly used) in an MLP to provide the 3D information for pi-GAN. Gaussian activations have been shown
to have good performance in bundle adjustment even without using a positional encoding (commonly used with ReLU but
not sine activations), with easier initialization than for sine-activations. However we found that without a positional encoding
using Gaussian activation functions did not produce quality images for any of the configurations we tried. With positional
encoding it produced comparable results to using a sine activation or ReLU activation with positional encoding, although the
method using sine activation performed the best.
