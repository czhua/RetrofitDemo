package chan.com.retrofitdemo.entity.work;

import org.simpleframework.xml.Attribute;
import org.simpleframework.xml.Element;
import org.simpleframework.xml.ElementList;
import org.simpleframework.xml.Root;

import java.util.ArrayList;

/**
 * Created by zehua_chen on 2017/8/23.
 */
@Root
public class NodeEntity {
    @Attribute(name = "name", required = true)
    private String name;

    @Attribute(name = "level_id", required = false)
    private int level_id;

    @Attribute(name = "type")
    private String type;

    @ElementList(entry = "item", required = false, inline = true)
    private ArrayList<ItemEntity> items;

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public int getLevel_id() {
        return level_id;
    }

    public void setLevel_id(int level_id) {
        this.level_id = level_id;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public ArrayList<ItemEntity> getItems() {
        return items;
    }

    public void setItems(ArrayList<ItemEntity> items) {
        this.items = items;
    }

    @Override
    public String toString() {
        return "NodeEntity{" +
                "name='" + name + '\'' +
                ", level_id=" + level_id +
                ", type='" + type + '\'' +
                ", items=" + items +
                '}';
    }
}
