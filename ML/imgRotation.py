import numpy as np
import cv2

img=cv2.imread('image.jpg')
row, col = img.shape[:2]   
img_rotation = cv2.warpAffine(img, cv2.getRotationMatrix2D((col/2, row/2), 90, 0.9), (col, row))
cv2.imshow('window', img_rotation)
cv2.waitKey(0)