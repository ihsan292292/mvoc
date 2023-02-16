import numpy as np
import cv2

img=cv2.imread('image.jpg')


num_rows, num_cols = img.shape[:2]  
src_points = np.float32([[0,0], [num_cols-1,0], [0,num_rows-1]])
dst_points = np.float32([[0,0], [int(0.6*(num_cols-1)),0], [int(0.4*(num_cols-1)),num_rows-1]])
matrix = cv2.getAffineTransform(src_points, dst_points)
img_afftran = cv2.warpAffine(img, matrix, (num_cols,num_rows))
cv2.imshow('window',img)
cv2.waitKey(0)
cv2.imshow('window',img_afftran)
cv2.waitKey(0)