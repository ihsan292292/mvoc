import cv2
img = cv2.imread('image.jpg')
img_gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
img_invert = 255-img_gray


img_blur=cv2.GaussianBlur(img_invert,(21,21),0)


img_invert_blur = 255-img_blur


img_pencil=cv2.divide(img_gray,img_invert_blur,scale=256.0)


cv2.imshow('Original Window',img)
cv2.imshow('Output Window',img_pencil)
cv2.waitKey(0)
cv2.destroyAllWindows()