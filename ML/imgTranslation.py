import numpy as np
import cv2

img=cv2.imread('image.jpg')
row, col = img.shape[:2]

translation_matrix = np.float32([ [1,0,70], [0,1,100] ])
img_translation = cv2.warpAffine(img, translation_matrix, (col, row), cv2.INTER_LINEAR)

translation_matrix = np.float32([ [1,0,20], [0,1,20] ])
img_translation = cv2.warpAffine(img_translation, translation_matrix, (col + 70 + 30, row + 110 + 50))

im = cv2.resize(img_translation, (300, 300))
cv2.imshow('Output', im)
cv2.waitKey()
cv2.destroyAllWindows()