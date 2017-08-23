package chan.com.retrofitdemo.entity.work;

import org.simpleframework.xml.Attribute;
import org.simpleframework.xml.ElementList;
import org.simpleframework.xml.Root;

import java.util.ArrayList;

/**
 * Created by zehua_chen on 2017/8/23.
 */
@Root
public class WorkEntity {

    @ElementList(entry = "node", required = false, inline = true)
    public ArrayList<NodesEntity> nodes;

    @Attribute(name = "name")
    private String name;

    @Attribute(name = "version")
    private int version;


    public ArrayList<NodesEntity> getNodes() {
        return nodes;
    }

    public void setNodes(ArrayList<NodesEntity> nodes) {
        this.nodes = nodes;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public int getVersion() {
        return version;
    }

    public void setVersion(int version) {
        this.version = version;
    }

    @Override
    public String toString() {
        return "WorkEntity{" +
                "nodes=" + nodes +
                ", name='" + name + '\'' +
                ", version=" + version +
                '}';
    }
}
