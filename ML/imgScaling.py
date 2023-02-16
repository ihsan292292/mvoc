import numpy as np
import cv2

img=cv2.imread('image.jpg')

img_shrinked = cv2.resize(img,(150, 100), interpolation = cv2.INTER_AREA)
cv2.imshow('Shrinked', img_shrinked)
cv2.waitKey(0)

img_enlarged = cv2.resize(img_shrinked,None,fx=3.5, fy=3.5, interpolation = cv2.INTER_CUBIC)
cv2.imshow('Enlarge', img_enlarged)
cv2.waitKey(0)
