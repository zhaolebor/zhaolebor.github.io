---
title: Comparing Evolutionary Algorithms for Deep Neural Networks
summary: Using multi-layered coevolutionary approaches / hierarchical approaches to evolve deep neural network architecture
tags:
  - Machine Learning
  - Computer Vision
date: '2017-05-01T00:00:00Z'

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
url_code: 'https://github.com/zhaolebor/evolving-deep-neural-networks/tree/master'
url_paper: 'https://www.cs.swarthmore.edu/~meeden/cs81/f17/projects/AlanGabeHarsha.pdf'
url_slides: 'https://drive.google.com/file/d/1dRCuhLWxomSDF39k3anQXdSSJIPQc-jF/view?usp=sharing'
url_video: ''

# Slides (optional).
#   Associate this project with Markdown slides.
#   Simply enter your slide deck's filename without extension.
#   E.g. `slides = "example-slides"` references `content/slides/example-slides.md`.
#   Otherwise, set `slides = ""`.
slides: ''
---

Genetic algorithms have long been successfully applied to optimize the weights of neural networks. The genetic 
concept of crossover, recombining components to form a stronger component, applies well to Deep Neural
Networks. This paper elaborates on the performances of two automated evolutionary methods for optimizing deep
learning architectures on the relevant and important tasks of image classification and language modeling. The first of
these methods is based on evolving populations of chromosomes and crossing over the strongest amongst them, and
the second is based on a hierarchical genetic representation scheme. Both of the algorithms required a substantial
amount of computational power in the original literatures. Given the limited resources available, presented are the
implementations of these algorithms at a relatively small scale for both tasks as well as results on the CIFAR-10
dataset, demonstrating classification quality comparable to that of literature and setting the stage for the future work
of merging these methodologies.

The results of this paper show that both multi-layered coevolutionary approaches and hierarchical approaches to optimizing DNNs are feasible and can develop DNNs comparable to those with hand-designed architectures. We demonstrate results comparable to benchmark models on the CIFAR-10 image classification dataset and present a ready-to-go
platform for evolving LSTMs to tackle language modeling. The latter in particular, was not achieved by either of the
original literatures. The potential of our work is still largely untapped due to the enormous computational power necessary to train the necessary number of networks for obtaining the best network architectures through evolution. It is worth noting that solving the problem of meta-learning still benefits significantly from having more computational
resources because of parallelism, and replicating the same level of results at a small scale is still nearly impossible,
as our results did not reach the same level as the original literatures (CoDeepNEAT at 0.927 and hierarchical Search
at 0.963 test accuracy). However, from implementing and experimenting with the algorithms, we found that CoDeepNEAT was effective at both speciation and evolving a population of good-performing architectures with variations;
hierarchical search was effective at both encoding and simplifying complex architectures. As more computational
resources and time become more available to us, we expect to evolve novel network architectures while still achieving,
at the very least, the benchmark scores on the PTB and CIFAR-10 datasets.
