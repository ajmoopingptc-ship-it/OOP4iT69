
public class Main {

    public static void main(String[] args) {
        // สร้าง Object rect1 ตาม Object Diagram
        Rectangle rect1 = new Rectangle(5.0, 10.0);

        // แสดงผล
        System.out.println("=== Rectangle Area Calculator (VS Code) ===");
        System.out.println("Width: " + rect1.getWidth());
        System.out.println("Height: " + rect1.getHeight());
        System.out.println("Calculated Area: " + rect1.calculateArea());
        System.out.println("========================================");
    }
}
