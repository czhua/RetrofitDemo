package chan.com.retrofitdemo.entity.work;

import org.simpleframework.xml.Attribute;
import org.simpleframework.xml.ElementList;
import org.simpleframework.xml.Path;
import org.simpleframework.xml.Root;

import java.util.ArrayList;

/**
 * Created by zehua_chen on 2017/8/23.
 */
@Root
public class NodesEntity {
    @Attribute(name = "name", required = true)
    private String name;

    @Attribute(name = "book_unit_id", required = false)
    private int book_unit_id;

    @Attribute(name = "type")
    private String type;

    @ElementList(entry = "node", required = false, inline = true)
    private ArrayList<NodeEntity> node;

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public int getBook_unit_id() {
        return book_unit_id;
    }

    public void setBook_unit_id(int book_unit_id) {
        this.book_unit_id = book_unit_id;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public ArrayList<NodeEntity> getNode() {
        return node;
    }

    public void setNode(ArrayList<NodeEntity> node) {
        this.node = node;
    }

    @Override
    public String toString() {
        return "NodesEntity{" +
                "name='" + name + '\'' +
                ", book_unit_id=" + book_unit_id +
                ", type='" + type + '\'' +
                ", node=" + node +
                '}';
    }
}
