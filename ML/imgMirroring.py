import numpy as np
import cv2

img=cv2.imread('image.jpg')
img_shrinked = cv2.resize(img,(150, 100), interpolation = cv2.INTER_AREA)

r, c = img_shrinked.shape[:2]
mx = np.float32([[0,0], [c-1,0], [0,r-1]])
my= np.float32([[c-1,0], [0,0], [c-1,r-1]])
matrix = cv2.getAffineTransform(mx,my)
mir = cv2.warpAffine(img_shrinked, matrix, (c,r))
cv2.imshow('window',img_shrinked)
# cv2.waitKey(0)
cv2.imshow('Mirror',mir)
cv2.waitKey(0)