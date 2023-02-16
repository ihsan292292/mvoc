import cv2
import matplotlib.pyplot as plt

img=cv2.imread("image.jpg")
cv2.imshow('window',img)
cv2.waitKey(0)
cv2.destroyAllWindows()

#Displaying using Matlab in BGR
plt.imshow(img)
plt.axis(False)
plt.show()

#Convert BGR to RGB: Method 1
plt.imshow(img[:,:,::-1])
plt.axis(False)
# plt.show()
