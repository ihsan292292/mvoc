import numpy as np
import cv2

img=cv2.imread('image.jpg')   

# To display the Original Image in color
ims = cv2.resize(img, (300, 300))
cv2.imshow('Original',ims)
cv2.waitKey()
cv2.destroyAllWindows()

#Checking the Data Structure
print(img.shape)
print(img.size)
print(type(img))