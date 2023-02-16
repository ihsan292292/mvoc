import cv2
print('Package Imported')

img=cv2.imread('image.jpg',-1)   # Read the image

'''# To display the image in original color
cv2.imshow('window',img)
cv2.waitKey(0)
cv2.destroyAllWindows()'''

# To display the image in Gray Color
grey=cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
cv2.imshow('window',grey)
cv2.waitKey(0)
cv2.destroyAllWindows()

# To display the image in RGB Color
rgb = cv2.cvtColor(img, cv2.COLOR_BGR2RGB)
cv2.imshow('window', rgb)
cv2.waitKey(0)
cv2.destroyAllWindows()

# To display the image in HSV
hsv=cv2.cvtColor(img,cv2.COLOR_BGR2HSV)
cv2.imshow('window',hsv)
cv2.waitKey(0)
cv2.destroyAllWindows()