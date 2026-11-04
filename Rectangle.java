public class Rectangle {
    // Private Attributes (-)
    private double width;
    private double height;

    // Constructor (+)
    public Rectangle(double width, double height) {
        this.width = width;
        this.height = height;
    }

    // Getter & Setter (+)
    public double getWidth() {
        return width;
    }

    public void setWidth(double width) {
        this.width = width;
    }

    public double getHeight() {
        return height;
    }

    public void setHeight(double height) {
        this.height = height;
    }

    // Operation คำนวณพื้นที่ (+)
    public double calculateArea() {
        return this.width * this.height;
    }
}
