---
title: Modeling Multimodal Distribution with Improved BicycleGAN
summary: Improve BicycleGAN’s performance through architectures and loss function modifications
tags:
  - Computer Vision
  - Machine Learning
  - Python
  - PyTorch
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
  url: https://drive.google.com/file/d/1Zr4OppEE5S0xd1-fcAvoVkKuQkpaOkGl/view?usp=sharing
url_code: 'https://github.com/zhaolebor/CIS6800-Final-Project'
url_pdf: ''
url_slides: 'https://docs.google.com/presentation/d/1qYsPmY65_fXbzG4twYygCKpeep3X-nLHV3TidEhW5EA/edit?usp=sharing'
url_video: 'https://youtu.be/vjcgo-7UME4'

# Slides (optional).
#   Associate this project with Markdown slides.
#   Simply enter your slide deck's filename without extension.
#   E.g. `slides = "example-slides"` references `content/slides/example-slides.md`.
#   Otherwise, set `slides = ""`.
slides: ''
---

Image-to-image translation aims to transform images from one domain to have the characteristics of another domain while preserving the content representations. Generative adversarial networks (GAN) have made tremendous progress in recent years to enable photo-realistic image-to-image translation, which has applications in synthesis, restoration, and style transfer. In this project, we want to explore multimodal conditional synthesis based on BicycleGAN. While most GAN-based approaches suffer from mode collapse in conditional synthesis, BicycleGAN proposes a hybrid model that encourages invertible mapping between the output and the latent code, which should improve generation diversity while maintaining realism. We aim to further improve BicycleGAN’s performance through architectures and loss function modifications.

We find that by combining multiple objectives for encouraging a bijective mapping between the latent and output spaces, we obtain results that are more realistic and diverse. We observe a trade-off to some extent between realism and diversity with increased generator and discriminator complexity. However, due to the unstable nature of GAN training, it is relatively hard to achieve consistency.
