
public class Triangle {

    // กำหนด Attribute (ความยาวฐาน และ ความสูง)
    private double base;
    private double height;

    // Constructor แบบไม่รับค่า (Default)
    public Triangle() {
        this.base = 0.0;
        this.height = 0.0;
    }

    // Constructor แบบรับค่าฐานและความสูง
    public Triangle(double base, double height) {
        this.base = base;
        this.height = height;
    }

    // Getter & Setter สำหรับความยาวฐาน (Base)
    public double getBase() {
        return base;
    }

    public void setBase(double base) {
        this.base = base;
    }

    // Getter & Setter สำหรับความสูง (Height)
    public double getHeight() {
        return height;
    }

    public void setHeight(double height) {
        this.height = height;
    }

    // เมธอดสำหรับคำนวณหาพื้นที่รูปสามเหลี่ยม (สูตร: 1/2 * ฐาน * สูง)
    public double calculateArea() {
        return 0.5 * base * height;
    }
}
