import cv2
import matplotlib.pyplot as plt

img = cv2.imread("image.jpg") 
img = cv2.cvtColor(img, cv2.COLOR_BGR2RGB) 
plt.axis('off') 
plt.imshow(img) 
plt.show()

cropped_img = img[200:300, 10:300]

plt.axis('off') 
plt.imshow(cropped_img) 
plt.show()