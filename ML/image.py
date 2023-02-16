import cv2
print('package is imported')
print(cv2.__version__)

img = cv2.imread('image.jpg',-1)
cv2.imshow('im',img)
cv2.waitKey()
cv2.destroyAllWindows()
cv2.imwrite('im_copy.png', img)

cap=cv2.VideoCapture('test.avi')
while True:
    success, img=cap.read()
    cv2.imshow('video',img)

    if cv2.waitKey(1) & 0xFF==ord('q'): # Quit with pressing the letter q
        break
